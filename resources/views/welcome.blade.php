<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Akomodasi - Traveloka Clone</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <!-- Header Section -->
    <header class="bg-primary text-white text-center py-4">
      <div class="container">
        <a href="./index.html">
          <img src="./img/logo.svg" alt="Traveloka Logo" width="200" />
        </a>
      </div>
    </header>

    <!-- Search Section -->
    <section class="hero bg-primary pt-3 pb-5">
      <div class="container text-center">
        <h1 class="display-4 text-white mb-3">Cari Akomodasi</h1>
        <p class="lead text-white mb-4">
          Cari hotel, villa, dan tempat menginap lainnya dengan mudah di sini.
        </p>

        <!-- Search Form -->
        <form>
          <div class="row justify-content-center">
            <!-- Akomodasi -->
            <div class="col-md-3 mb-3">
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-hotel"></i>
                </span>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Cari Hotel, Villa, Lainnya"
                />
              </div>
            </div>

            <!-- Provinsi -->
            <div class="col-md-3 mb-3">
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-map-marker-alt"></i>
                </span>
                <select class="form-select" aria-label="Pilih Provinsi">
                  <option selected>Pilih Provinsi</option>
                  <option value="jakarta">DKI Jakarta</option>
                  <option value="jabar">Jawa Barat</option>
                  <option value="jateng">Jawa Tengah</option>
                  <option value="jatim">Jawa Timur</option>
                  <option value="bali">Bali</option>
                  <option value="sumut">Sumatera Utara</option>
                  <option value="riau">Riau</option>
                  <option value="kalbar">Kalimantan Barat</option>
                  <option value="papua">Papua</option>
                </select>
              </div>
            </div>
          </div>

          <!-- Tanggal Check-in dan Check-out -->
          <div class="row justify-content-center">
            <div class="col-md-6 mb-3">
              <div class="input-group">
                <!-- Tanggal Pergi -->
                <div class="form-floating">
                  <input
                    type="date"
                    class="form-control"
                    placeholder="Pilih Tanggal Pergi"
                    id="checkin-date"
                  />
                  <label for="checkin-date">Check-in</label>
                </div>
                <!-- Tanggal Pulang -->
                <div class="form-floating">
                  <input
                    type="date"
                    class="form-control"
                    placeholder="Pilih Tanggal Pulang"
                    id="checkout-date"
                  />
                  <label for="checkout-date">Check-out</label>
                </div>
              </div>
            </div>
          </div>

          <!-- Jumlah Kamar dan Tamu -->
          <div class="row justify-content-center">
            <!-- Jumlah Kamar -->
            <div class="col-md-3 mb-3">
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-bed"></i>
                </span>
                <input
                  type="number"
                  class="form-control"
                  placeholder="Jumlah Kamar"
                  min="1"
                  max="10"
                />
              </div>
            </div>

            <!-- Jumlah Tamu -->
            <div class="col-md-3 mb-3">
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-user"></i>
                </span>
                <input
                  type="number"
                  class="form-control"
                  placeholder="Jumlah Tamu"
                  min="1"
                  max="20"
                />
              </div>
            </div>
          </div>

          <!-- Button Cari -->
          <div class="row justify-content-center">
            <div class="col-md-2 mb-3">
              <button type="submit" class="btn btn-light rounded-pill w-100">
                Cari Akomodasi
              </button>
            </div>
          </div>
        </form>
      </div>
    </section>

    <!-- Main Section -->
    <main>
      <!-- Daftar Akomodasi -->
      <section class="accommodations my-5">
        <div class="container">
          <h2 class="text-center mb-4">Daftar Akomodasi Tersedia</h2>
          <div class="row justify-content-center">
            <!-- Akomodasi 1 -->
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <img
                  src="./img/hotel-1.jpg"
                  class="card-img-top"
                  alt="Hotel 1"
                />
                <div class="card-body">
                  <h5 class="card-title">Hotel Bintang Lima Jakarta</h5>
                  <p class="card-text">
                    Hotel mewah dengan fasilitas lengkap di pusat kota Jakarta.
                  </p>
                  <h6 class="text-primary">Rp 1.200.000/malam</h6>
                  <p class="text-warning mb-0">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    (4.8)
                  </p>
                  <p class="mb-0 text-muted">
                    Fasilitas: Kolam renang, Wi-Fi gratis
                  </p>
                </div>
                <div class="card-footer text-center">
                  <a href="#" class="btn btn-primary rounded-pill w-100">
                    Lihat Detail
                  </a>
                </div>
              </div>
            </div>

            <!-- Akomodasi 2 -->
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <img
                  src="./img/hotel-2.jpg"
                  class="card-img-top"
                  alt="Hotel 2"
                />
                <div class="card-body">
                  <h5 class="card-title">Villa Puncak Indah</h5>
                  <p class="card-text">
                    Villa nyaman dengan pemandangan gunung di Puncak.
                  </p>
                  <h6 class="text-primary">Rp 900.000/malam</h6>
                  <p class="text-warning mb-0">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    (4.5)
                  </p>
                  <p class="mb-0 text-muted">Fasilitas: Parkir gratis, Dapur</p>
                </div>
                <div class="card-footer text-center">
                  <a href="#" class="btn btn-primary rounded-pill w-100">
                    Lihat Detail
                  </a>
                </div>
              </div>
            </div>

            <!-- Akomodasi 3 -->
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <img
                  src="./img/hotel-3.jpg"
                  class="card-img-top"
                  alt="Hotel 3"
                />
                <div class="card-body">
                  <h5 class="card-title">Resort Bali Tepi Pantai</h5>
                  <p class="card-text">
                    Resort mewah dengan akses langsung ke pantai di Bali.
                  </p>
                  <h6 class="text-primary">Rp 2.500.000/malam</h6>
                  <p class="text-warning mb-0">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    (5.0)
                  </p>
                  <p class="mb-0 text-muted">
                    Fasilitas: Kolam renang, Restoran
                  </p>
                </div>
                <div class="card-footer text-center">
                  <a href="#" class="btn btn-primary rounded-pill w-100">
                    Lihat Detail
                  </a>
                </div>
              </div>
            </div>

            <!-- Akomodasi 4 -->
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <img
                  src="./img/hotel-4.jpg"
                  class="card-img-top"
                  alt="Hotel 4"
                />
                <div class="card-body">
                  <h5 class="card-title">Hotel Surabaya Kota</h5>
                  <p class="card-text">
                    Hotel bintang 4 dengan fasilitas modern di pusat kota
                    Surabaya.
                  </p>
                  <h6 class="text-primary">Rp 800.000/malam</h6>
                  <p class="text-warning mb-0">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    (4.2)
                  </p>
                  <p class="mb-0 text-muted">Fasilitas: Gym, Wi-Fi gratis</p>
                </div>
                <div class="card-footer text-center">
                  <a href="#" class="btn btn-primary rounded-pill w-100">
                    Lihat Detail
                  </a>
                </div>
              </div>
            </div>

            <!-- Akomodasi 5 -->
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <img
                  src="./img/hotel-5.jpg"
                  class="card-img-top"
                  alt="Hotel 5"
                />
                <div class="card-body">
                  <h5 class="card-title">Villa Seminyak</h5>
                  <p class="card-text">
                    Villa eksklusif dengan kolam renang pribadi di Seminyak,
                    Bali.
                  </p>
                  <h6 class="text-primary">Rp 1.800.000/malam</h6>
                  <p class="text-warning mb-0">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    (4.7)
                  </p>
                  <p class="mb-0 text-muted">
                    Fasilitas: Kolam renang pribadi, Dapur
                  </p>
                </div>
                <div class="card-footer text-center">
                  <a href="#" class="btn btn-primary rounded-pill w-100">
                    Lihat Detail
                  </a>
                </div>
              </div>
            </div>

            <!-- Akomodasi 6 -->
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <img
                  src="./img/hotel-6.jpg"
                  class="card-img-top"
                  alt="Hotel 6"
                />
                <div class="card-body">
                  <h5 class="card-title">Resort Ubud Bali</h5>
                  <p class="card-text">
                    Resort bintang 5 di Ubud dengan spa dan pemandangan sawah.
                  </p>
                  <h6 class="text-primary">Rp 3.000.000/malam</h6>
                  <p class="text-warning mb-0">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    (5.0)
                  </p>
                  <p class="mb-0 text-muted">
                    Fasilitas: Spa, Restoran, Wi-Fi gratis
                  </p>
                </div>
                <div class="card-footer text-center">
                  <a href="#" class="btn btn-primary rounded-pill w-100">
                    Lihat Detail
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer Section -->
    <footer class="bg-dark text-white text-center py-4">
      <div class="container">
        <p>Follow Us on Social Media</p>
        <div class="d-flex justify-content-center">
          <a
            href="https://www.facebook.com/Traveloka"
            target="_blank"
            class="text-white mx-3"
          >
            <i class="fab fa-facebook"></i>
          </a>
          <a
            href="https://www.instagram.com/traveloka"
            target="_blank"
            class="text-white mx-3"
          >
            <i class="fab fa-instagram"></i>
          </a>
          <a
            href="https://twitter.com/traveloka"
            target="_blank"
            class="text-white mx-3"
          >
            <i class="fab fa-twitter"></i>
          </a>
          <a
            href="https://www.linkedin.com/company/traveloka/"
            target="_blank"
            class="text-white mx-3"
          >
            <i class="fab fa-linkedin"></i>
          </a>
        </div>
        <p class="mt-3">© 2024 Traveloka Clone. All Rights Reserved.</p>
      </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Destinasi - Traveloka Clone</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <!-- Header Section -->
    <header class="bg-primary text-white text-center py-4">
      <div class="container">
        <a href="./index.html">
          <img src="./img/logo.svg" alt="Traveloka Logo" width="200" />
        </a>
      </div>
    </header>

    <!-- Search Section -->
    <section class="search bg-primary pt-3 pb-5">
      <div class="container text-center">
        <h1 class="display-4 text-white mb-3">Destinasi Wisata</h1>
        <p class="lead text-white mb-4">
          Temukan destinasi wisata terbaik di Indonesia.
        </p>

        <!-- Search Form -->
        <form>
          <div class="row justify-content-center">
            <!-- Cari Destinasi -->
            <div class="col-md-6 mb-3">
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-map-marker-alt"></i>
                </span>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Cari Tempat Wisata"
                />
              </div>
            </div>

            <!-- Button Cari -->
            <div class="col-md-2 mb-3">
              <button type="submit" class="btn btn-light rounded-pill w-100">
                Cari Destinasi
              </button>
            </div>
          </div>
        </form>
      </div>
    </section>

    <!-- Daftar Destinasi -->
    <section class="destination-list my-5">
      <div class="container">
        <h2 class="text-center mb-4">Destinasi Wisata Populer</h2>
        <div class="row justify-content-center">
          <!-- Danau Toba -->
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="./img/destination-1.jpg" class="card-img-top" alt="Danau Toba" />
              <div class="card-body">
                <h5 class="card-title">Danau Toba</h5>
                <p class="card-text">
                  Danau vulkanik terbesar di dunia, Danau Toba, terletak di Sumatera Utara, dikelilingi oleh pemandangan alam yang indah.
                </p>
                <h6 class="text-primary">Sumatera Utara</h6>
              </div>
              <div class="card-footer text-center">
                <a href="#" class="btn btn-primary rounded-pill w-100">Lihat Detail</a>
              </div>
            </div>
          </div>

          <!-- Bromo Tengger Semeru -->
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="./img/destination-2.jpg" class="card-img-top" alt="Bromo Tengger Semeru" />
              <div class="card-body">
                <h5 class="card-title">Bromo Tengger Semeru</h5>
                <p class="card-text">
                  Gunung Bromo dan Semeru adalah destinasi wisata gunung berapi yang menakjubkan di Jawa Timur, terkenal dengan matahari terbitnya.
                </p>
                <h6 class="text-primary">Jawa Timur</h6>
              </div>
              <div class="card-footer text-center">
                <a href="#" class="btn btn-primary rounded-pill w-100">Lihat Detail</a>
              </div>
            </div>
          </div>

          <!-- Nusa Penida -->
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="./img/destination-3.jpg" class="card-img-top" alt="Nusa Penida" />
              <div class="card-body">
                <h5 class="card-title">Nusa Penida</h5>
                <p class="card-text">
                  Pulau Nusa Penida menawarkan keindahan pantai dan tebing yang spektakuler, terletak di Bali bagian tenggara.
                </p>
                <h6 class="text-primary">Bali</h6>
              </div>
              <div class="card-footer text-center">
                <a href="#" class="btn btn-primary rounded-pill w-100">Lihat Detail</a>
              </div>
            </div>
          </div>

          <!-- Raja Ampat -->
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="./img/destination-4.jpg" class="card-img-top" alt="Raja Ampat" />
              <div class="card-body">
                <h5 class="card-title">Raja Ampat</h5>
                <p class="card-text">
                  Raja Ampat terkenal dengan keindahan bawah lautnya, dan menjadi surga bagi para penyelam di seluruh dunia.
                </p>
                <h6 class="text-primary">Papua Barat</h6>
              </div>
              <div class="card-footer text-center">
                <a href="#" class="btn btn-primary rounded-pill w-100">Lihat Detail</a>
              </div>
            </div>
          </div>

          <!-- Labuan Bajo -->
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="./img/destination-5.jpg" class="card-img-top" alt="Labuan Bajo" />
              <div class="card-body">
                <h5 class="card-title">Labuan Bajo</h5>
                <p class="card-text">
                  Pintu gerbang menuju Taman Nasional Komodo, Labuan Bajo menawarkan keindahan alam dan aktivitas laut yang luar biasa.
                </p>
                <h6 class="text-primary">Nusa Tenggara Timur</h6>
              </div>
              <div class="card-footer text-center">
                <a href="#" class="btn btn-primary rounded-pill w-100">Lihat Detail</a>
              </div>
            </div>
          </div>

          <!-- Kawah Ijen -->
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="./img/destination-6.jpg" class="card-img-top" alt="Kawah Ijen" />
              <div class="card-body">
                <h5 class="card-title">Kawah Ijen</h5>
                <p class="card-text">
                  Terkenal dengan fenomena api biru, Kawah Ijen di Jawa Timur merupakan salah satu tempat wisata vulkanik terbaik di Indonesia.
                </p>
                <h6 class="text-primary">Jawa Timur</h6>
              </div>
              <div class="card-footer text-center">
                <a href="#" class="btn btn-primary rounded-pill w-100">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-dark text-white text-center py-4">
      <div class="container">
        <p>Follow Us on Social Media</p>
        <div class="d-flex justify-content-center">
          <a
            href="https://www.facebook.com/Traveloka"
            target="_blank"
            class="text-white mx-3"
          >
            <i class="fab fa-facebook"></i>
          </a>
          <a
            href="https://www.instagram.com/traveloka"
            target="_blank"
            class="text-white mx-3"
          >
            <i class="fab fa-instagram"></i>
          </a>
          <a
            href="https://twitter.com/traveloka"
            target="_blank"
            class="text-white mx-3"
          >
            <i class="fab fa-twitter"></i>
          </a>
          <a
            href="https://www.linkedin.com/company/traveloka/"
            target="_blank"
            class="text-white mx-3"
          >
            <i class="fab fa-linkedin"></i>
          </a>
        </div>
        <p class="mt-3">© 2024 Traveloka Clone. All Rights Reserved.</p>
      </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Traveloka Clone</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <!-- Header Section -->
    <header class="bg-primary text-white text-center py-4">
      <div class="container">
        <a href="./index.html">
          <img src="./img/logo.svg" alt="Traveloka Logo" width="200" />
        </a>
      </div>
    </header>

    <!-- Hero Section -->
    <section class="hero bg-primary pt-3 pb-5">
      <div class="container text-center">
        <h1 class="display-4 text-white mb-3">Temukan Perjalanan Impian</h1>
        <p class="lead text-white mb-4">
          Pesan tiket pesawat, hotel, dan destinasi wisata dengan mudah bersama
          Traveloka
        </p>

        <!-- Search Form -->
        <form>
          <div class="row justify-content-center">
            <!-- Penerbangan -->
            <div class="col-md-3 mb-3">
              <div class="input-group">
                <span class="input-group-text bg-white">
                  <i class="fas fa-plane"></i>
                </span>
                <input
                  type="text"
                  class="form-control form-control"
                  placeholder="Cari Penerbangan"
                />
              </div>
            </div>

            <!-- Hotel -->
            <div class="col-md-3 mb-3">
              <div class="input-group">
                <span class="input-group-text bg-white">
                  <i class="fas fa-hotel"></i>
                </span>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Cari Hotel"
                />
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-6 mb-3">
              <div class="input-group">
                <!-- Tanggal Pergi -->
                <div class="form-floating">
                  <input
                    type="date"
                    class="form-control"
                    placeholder="Pilih Tanggal Pergi"
                    id="departure-date"
                  />
                  <label for="departure-date">Keberangkatan</label>
                </div>
                <!-- Tanggal Pulang -->
                <div class="form-floating">
                  <input
                    type="date"
                    class="form-control"
                    placeholder="Pilih Tanggal Pulang"
                    id="return-date"
                  />
                  <label for="return-date">Kepulangan</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <!-- Button Cari -->
            <div class="col-md-2 mb-3">
              <a class="btn btn-light rounded-pill w-100" href="./akomodasi.html">
                Cari
              </a>
            </div>
          </div>
        </form>
      </div>
    </section>

    <!-- Main Section -->
    <main>
      <div class="container my-5">
        <!-- Features Section -->
        <section class="features">
          <h2 class="text-center mb-4">Eksplorasi Perjalananmu</h2>
          <div class="row justify-content-center text-center">
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <img
                    src="./img/feature-1.jpg"
                    alt="Pesawat"
                    class="card-img"
                  />
                  <h5 class="card-title mt-3">Transportasi</h5>
                  <p class="mb-0">Mobil, Bus, Pesawat</p>
                  <a
                    href="./transportasi.html"
                    class="btn btn-primary rounded-pill mt-3"
                    >Cari Transportasi</a
                  >
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <img
                    src="./img/feature-2.jpg"
                    alt="Pesawat"
                    class="card-img"
                  />
                  <h5 class="card-title mt-3">Akomodasi</h5>
                  <p class="mb-0">Hotel, Villa</p>
                  <a
                    href="./akomodasi.html"
                    class="btn btn-primary rounded-pill mt-3"
                    >Cari Akomodasi</a
                  >
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <img
                    src="./img/feature-3.jpg"
                    alt="Pesawat"
                    class="card-img"
                  />
                  <h5 class="card-title mt-3">Destinasi</h5>
                  <p class="mb-0">Tempat Wisata</p>
                  <a
                    href="./destinasi.html"
                    class="btn btn-primary rounded-pill mt-3"
                    >Cari Destinasi</a
                  >
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Promo Section -->
        <section class="promo my-5">
          <div class="container">
            <h2 class="text-center text-primary mb-4">Promo Pesawat Terbaik</h2>
            <div class="row justify-content-center">
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100">
                  <img
                    src="./img/promo-1.jpg"
                    class="card-img-top"
                    alt="Promo Penerbangan"
                  />
                  <div class="card-body">
                    <h5 class="card-title">Promo Penerbangan Jakarta - Bali</h5>
                    <p class="card-text">
                      Diskon hingga 50% untuk penerbangan langsung dari Jakarta
                      ke Bali.
                    </p>
                    <h6 class="text-danger">Mulai dari Rp 500.000</h6>
                  </div>
                  <div class="card-footer text-center">
                    <a href="./transportasi.html" class="btn btn-primary rounded-pill w-100">
                      Lihat Promo
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100">
                  <img
                    src="./img/promo-2.jpg"
                    class="card-img-top"
                    alt="Promo Penerbangan"
                  />
                  <div class="card-body">
                    <h5 class="card-title">
                      Promo Penerbangan Surabaya - Lombok
                    </h5>
                    <p class="card-text">
                      Nikmati potongan harga 40% untuk perjalanan ke Lombok.
                    </p>
                    <h6 class="text-danger">Mulai dari Rp 400.000</h6>
                  </div>
                  <div class="card-footer text-center">
                    <a href="./transportasi.html" class="btn btn-primary rounded-pill w-100">
                      Lihat Promo
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100">
                  <img
                    src="./img/promo-3.jpg"
                    class="card-img-top"
                    alt="Promo Penerbangan"
                  />
                  <div class="card-body">
                    <h5 class="card-title">
                      Promo Penerbangan Bandung - Yogyakarta
                    </h5>
                    <p class="card-text">
                      Dapatkan diskon spesial hingga 60% ke destinasi favorit.
                    </p>
                    <h6 class="text-danger">Mulai dari Rp 350.000</h6>
                  </div>
                  <div class="card-footer text-center">
                    <a href="./transportasi.html" class="btn btn-primary rounded-pill w-100">
                      Lihat Promo
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-4">
              <a href="./transportasi.html" class="btn btn-outline-primary rounded-pill">
                Lihat Semua Promo
              </a>
            </div>
          </div>
        </section>
      </div>
    </main>

    <!-- Footer Section -->
    <footer class="bg-dark text-white text-center py-4">
      <div class="container">
        <p>Follow Us on Social Media</p>
        <div class="d-flex justify-content-center">
          <a
            href="https://www.facebook.com/Traveloka"
            target="_blank"
            class="text-white mx-3"
          >
            <i class="fab fa-facebook"></i>
          </a>
          <a
            href="https://www.instagram.com/traveloka"
            target="_blank"
            class="text-white mx-3"
          >
            <i class="fab fa-instagram"></i>
          </a>
          <a
            href="https://twitter.com/traveloka"
            target="_blank"
            class="text-white mx-3"
          >
            <i class="fab fa-twitter"></i>
          </a>
          <a
            href="https://www.linkedin.com/company/traveloka/"
            target="_blank"
            class="text-white mx-3"
          >
            <i class="fab fa-linkedin"></i>
          </a>
        </div>
        <p class="mt-3">© 2024 Traveloka Clone. All Rights Reserved.</p>
      </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Traveloka Clone</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <!-- Header Section -->
    <header class="bg-primary text-white text-center py-4">
      <div class="container">
        <a href="./index.html">
          <img src="./img/logo.svg" alt="Traveloka Logo" width="200" />
        </a>
      </div>
    </header>

    <!-- Hero Section -->
    <section class="hero bg-primary pt-3 pb-5">
      <div class="container text-center">
        <h1 class="display-4 text-white mb-3">Temukan Perjalanan Impian</h1>
        <p class="lead text-white mb-4">
          Pesan tiket pesawat, hotel, dan destinasi wisata dengan mudah bersama
          Traveloka
        </p>

        <!-- Search Form -->
        <form>
          <div class="row justify-content-center">
            <!-- Penerbangan -->
            <div class="col-md-3 mb-3">
              <div class="input-group">
                <span class="input-group-text bg-white">
                  <i class="fas fa-plane"></i>
                </span>
                <input
                  type="text"
                  class="form-control form-control"
                  placeholder="Cari Penerbangan"
                />
              </div>
            </div>

            <!-- Hotel -->
            <div class="col-md-3 mb-3">
              <div class="input-group">
                <span class="input-group-text bg-white">
                  <i class="fas fa-hotel"></i>
                </span>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Cari Hotel"
                />
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-6 mb-3">
              <div class="input-group">
                <!-- Tanggal Pergi -->
                <div class="form-floating">
                  <input
                    type="date"
                    class="form-control"
                    placeholder="Pilih Tanggal Pergi"
                    id="departure-date"
                  />
                  <label for="departure-date">Keberangkatan</label>
                </div>
                <!-- Tanggal Pulang -->
                <div class="form-floating">
                  <input
                    type="date"
                    class="form-control"
                    placeholder="Pilih Tanggal Pulang"
                    id="return-date"
                  />
                  <label for="return-date">Kepulangan</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <!-- Button Cari -->
            <div class="col-md-2 mb-3">
              <a class="btn btn-light rounded-pill w-100" href="./akomodasi.html">
                Cari
              </a>
            </div>
          </div>
        </form>
      </div>
    </section>

    <!-- Main Section -->
    <main>
      <div class="container my-5">
        <!-- Features Section -->
        <section class="features">
          <h2 class="text-center mb-4">Eksplorasi Perjalananmu</h2>
          <div class="row justify-content-center text-center">
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <img
                    src="./img/feature-1.jpg"
                    alt="Pesawat"
                    class="card-img"
                  />
                  <h5 class="card-title mt-3">Transportasi</h5>
                  <p class="mb-0">Mobil, Bus, Pesawat</p>
                  <a
                    href="./transportasi.html"
                    class="btn btn-primary rounded-pill mt-3"
                    >Cari Transportasi</a
                  >
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <img
                    src="./img/feature-2.jpg"
                    alt="Pesawat"
                    class="card-img"
                  />
                  <h5 class="card-title mt-3">Akomodasi</h5>
                  <p class="mb-0">Hotel, Villa</p>
                  <a
                    href="./akomodasi.html"
                    class="btn btn-primary rounded-pill mt-3"
                    >Cari Akomodasi</a
                  >
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <img
                    src="./img/feature-3.jpg"
                    alt="Pesawat"
                    class="card-img"
                  />
                  <h5 class="card-title mt-3">Destinasi</h5>
                  <p class="mb-0">Tempat Wisata</p>
                  <a
                    href="./destinasi.html"
                    class="btn btn-primary rounded-pill mt-3"
                    >Cari Destinasi</a
                  >
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Promo Section -->
        <section class="promo my-5">
          <div class="container">
            <h2 class="text-center text-primary mb-4">Promo Pesawat Terbaik</h2>
            <div class="row justify-content-center">
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100">
                  <img
                    src="./img/promo-1.jpg"
                    class="card-img-top"
                    alt="Promo Penerbangan"
                  />
                  <div class="card-body">
                    <h5 class="card-title">Promo Penerbangan Jakarta - Bali</h5>
                    <p class="card-text">
                      Diskon hingga 50% untuk penerbangan langsung dari Jakarta
                      ke Bali.
                    </p>
                    <h6 class="text-danger">Mulai dari Rp 500.000</h6>
                  </div>
                  <div class="card-footer text-center">
                    <a href="./transportasi.html" class="btn btn-primary rounded-pill w-100">
                      Lihat Promo
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100">
                  <img
                    src="./img/promo-2.jpg"
                    class="card-img-top"
                    alt="Promo Penerbangan"
                  />
                  <div class="card-body">
                    <h5 class="card-title">
                      Promo Penerbangan Surabaya - Lombok
                    </h5>
                    <p class="card-text">
                      Nikmati potongan harga 40% untuk perjalanan ke Lombok.
                    </p>
                    <h6 class="text-danger">Mulai dari Rp 400.000</h6>
                  </div>
                  <div class="card-footer text-center">
                    <a href="./transportasi.html" class="btn btn-primary rounded-pill w-100">
                      Lihat Promo
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100">
                  <img
                    src="./img/promo-3.jpg"
                    class="card-img-top"
                    alt="Promo Penerbangan"
                  />
                  <div class="card-body">
                    <h5 class="card-title">
                      Promo Penerbangan Bandung - Yogyakarta
                    </h5>
                    <p class="card-text">
                      Dapatkan diskon spesial hingga 60% ke destinasi favorit.
                    </p>
                    <h6 class="text-danger">Mulai dari Rp 350.000</h6>
                  </div>
                  <div class="card-footer text-center">
                    <a href="./transportasi.html" class="btn btn-primary rounded-pill w-100">
                      Lihat Promo
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-4">
              <a href="./transportasi.html" class="btn btn-outline-primary rounded-pill">
                Lihat Semua Promo
              </a>
            </div>
          </div>
        </section>
      </div>
    </main>

    <!-- Footer Section -->
    <footer class="bg-dark text-white text-center py-4">
      <div class="container">
        <p>Follow Us on Social Media</p>
        <div class="d-flex justify-content-center">
          <a
            href="https://www.facebook.com/Traveloka"
            target="_blank"
            class="text-white mx-3"
          >
            <i class="fab fa-facebook"></i>
          </a>
          <a
            href="https://www.instagram.com/traveloka"
            target="_blank"
            class="text-white mx-3"
          >
            <i class="fab fa-instagram"></i>
          </a>
          <a
            href="https://twitter.com/traveloka"
            target="_blank"
            class="text-white mx-3"
          >
            <i class="fab fa-twitter"></i>
          </a>
          <a
            href="https://www.linkedin.com/company/traveloka/"
            target="_blank"
            class="text-white mx-3"
          >
            <i class="fab fa-linkedin"></i>
          </a>
        </div>
        <p class="mt-3">© 2024 Traveloka Clone. All Rights Reserved.</p>
      </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Transportasi - Traveloka Clone</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <!-- Header Section -->
    <header class="bg-primary text-white text-center py-4">
      <div class="container">
        <a href="./index.html">
          <img src="./img/logo.svg" alt="Traveloka Logo" width="200" />
        </a>
      </div>
    </header>

    <!-- Search Section -->
    <section class="search bg-primary pt-3 pb-5">
      <div class="container text-center">
        <h1 class="display-4 text-white mb-3">Pencarian Transportasi</h1>
        <p class="lead text-white mb-4">
          Cari penerbangan, rental mobil, atau bus untuk perjalanan Anda.
        </p>

        <!-- Search Form -->
        <form>
          <div class="row justify-content-center">
            <div class="col-md-6 mb-3">
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-plane"></i>
                </span>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Cari Penerbangan, Mobil, Bus, Lainnya"
                />
              </div>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-md-6 mb-3">
              <div class="input-group">
                <!-- Tanggal Pergi -->
                <div class="form-floating">
                  <input
                    type="date"
                    class="form-control"
                    placeholder="Pilih Tanggal Pergi"
                    id="departure-date"
                  />
                  <label for="departure-date">Keberangkatan</label>
                </div>
                <!-- Tanggal Pulang -->
                <div class="form-floating">
                  <input
                    type="date"
                    class="form-control"
                    placeholder="Pilih Tanggal Pulang"
                    id="return-date"
                  />
                  <label for="return-date">Kepulangan</label>
                </div>
              </div>
            </div>
          </div>

          <!-- Button Cari -->
          <div class="row justify-content-center">
            <div class="col-md-2 mb-3">
              <button type="submit" class="btn btn-light rounded-pill w-100">
                Cari Transportasi
              </button>
            </div>
          </div>
        </form>
      </div>
    </section>

    <!-- Daftar Transportasi -->
    <section class="transport-list my-5">
      <div class="container">
        <h2 class="text-center mb-4">Layanan Transportasi Tersedia</h2>
        <div class="row justify-content-center">
          <!-- Penerbangan 1 -->
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="./img/flight-1.jpg" class="card-img-top" alt="Penerbangan 1" />
              <div class="card-body">
                <h5 class="card-title">Penerbangan Jakarta - Bali</h5>
                <p class="card-text">
                  Penerbangan langsung dari Jakarta ke Bali dengan Garuda Indonesia.
                </p>
                <h6 class="text-primary">Rp 1.500.000</h6>
                <p class="text-muted mb-0">Durasi: 2 Jam</p>
              </div>
              <div class="card-footer text-center">
                <a href="#" class="btn btn-primary rounded-pill w-100">Lihat Detail</a>
              </div>
            </div>
          </div>

          <!-- Rental Mobil 1 -->
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="./img/car-1.jpg" class="card-img-top" alt="Rental Mobil 1" />
              <div class="card-body">
                <h5 class="card-title">Rental Mobil Toyota Avanza</h5>
                <p class="card-text">
                  Rental mobil Toyota Avanza dengan harga terjangkau di Yogyakarta.
                </p>
                <h6 class="text-primary">Rp 350.000/hari</h6>
                <p class="text-muted mb-0">Fasilitas: AC, Supir, BBM</p>
              </div>
              <div class="card-footer text-center">
                <a href="#" class="btn btn-primary rounded-pill w-100">Lihat Detail</a>
              </div>
            </div>
          </div>

          <!-- Bus 1 -->
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="./img/bus-1.jpg" class="card-img-top" alt="Bus 1" />
              <div class="card-body">
                <h5 class="card-title">Bus Jakarta - Surabaya</h5>
                <p class="card-text">
                  Perjalanan nyaman dengan bus eksekutif dari Jakarta ke Surabaya.
                </p>
                <h6 class="text-primary">Rp 250.000</h6>
                <p class="text-muted mb-0">Durasi: 12 Jam</p>
              </div>
              <div class="card-footer text-center">
                <a href="#" class="btn btn-primary rounded-pill w-100">Lihat Detail</a>
              </div>
            </div>
          </div>

          <!-- Penerbangan 2 -->
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="./img/flight-2.jpg" class="card-img-top" alt="Penerbangan 2" />
              <div class="card-body">
                <h5 class="card-title">Penerbangan Surabaya - Lombok</h5>
                <p class="card-text">
                  Penerbangan langsung dari Surabaya ke Lombok dengan Lion Air.
                </p>
                <h6 class="text-primary">Rp 900.000</h6>
                <p class="text-muted mb-0">Durasi: 1.5 Jam</p>
              </div>
              <div class="card-footer text-center">
                <a href="#" class="btn btn-primary rounded-pill w-100">Lihat Detail</a>
              </div>
            </div>
          </div>

          <!-- Rental Mobil 2 -->
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="./img/car-2.jpg" class="card-img-top" alt="Rental Mobil 2" />
              <div class="card-body">
                <h5 class="card-title">Rental Mobil Honda Brio</h5>
                <p class="card-text">
                  Sewa mobil Honda Brio dengan harga hemat di Bali.
                </p>
                <h6 class="text-primary">Rp 300.000/hari</h6>
                <p class="text-muted mb-0">Fasilitas: AC, Manual</p>
              </div>
              <div class="card-footer text-center">
                <a href="#" class="btn btn-primary rounded-pill w-100">Lihat Detail</a>
              </div>
            </div>
          </div>

          <!-- Bus 2 -->
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="./img/bus-2.jpg" class="card-img-top" alt="Bus 2" />
              <div class="card-body">
                <h5 class="card-title">Bus Bandung - Yogyakarta</h5>
                <p class="card-text">
                  Perjalanan nyaman dengan bus kelas bisnis dari Bandung ke Yogyakarta.
                </p>
                <h6 class="text-primary">Rp 270.000</h6>
                <p class="text-muted mb-0">Durasi: 10 Jam</p>
              </div>
              <div class="card-footer text-center">
                <a href="#" class="btn btn-primary rounded-pill w-100">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-dark text-white text-center py-4">
      <div class="container">
        <p>Follow Us on Social Media</p>
        <div class="d-flex justify-content-center">
          <a
            href="https://www.facebook.com/Traveloka"
            target="_blank"
            class="text-white mx-3"
          >
            <i class="fab fa-facebook"></i>
          </a>
          <a
            href="https://www.instagram.com/traveloka"
            target="_blank"
            class="text-white mx-3"
          >
            <i class="fab fa-instagram"></i>
          </a>
          <a
            href="https://twitter.com/traveloka"
            target="_blank"
            class="text-white mx-3"
          >
            <i class="fab fa-twitter"></i>
          </a>
          <a
            href="https://www.linkedin.com/company/traveloka/"
            target="_blank"
            class="text-white mx-3"
          >
            <i class="fab fa-linkedin"></i>
          </a>
        </div>
        <p class="mt-3">© 2024 Traveloka Clone. All Rights Reserved.</p>
      </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>