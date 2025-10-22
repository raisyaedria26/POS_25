<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Point Of Sales</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
  <link rel="stylesheet" href="../assets/css/raisya.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
</head>

<body>

  <!-- container fluid -->
  <div class="container-fluid container-pos">
    <div class="row h-100">
      <div class="col-md-7 product-section">
        <div class="mb-4">
          <h4 class="mb-3"><i class="fas fa-store"></i>The Products
          </h4>
          <input type="text" id="searchProduct" class="form-control search-box" placeholder="Find Product here...">
        </div>
        <div class="mb-4">
          <button class="btn btn-primary category-btn active">All Menu</button>
          <button class="btn btn-outline-primary category-btn">Foods</button>
          <button class="btn btn-outline-primary category-btn">Drinks</button>
          <button class="btn btn-outline-primary category-btn">Snacks</button>
        </div>
        <div class="row" id="productGrid">
          <div class="col-md-4 col-sm-6">
            <div class="card product-card">
              <div class="product-img">
                <img src="../assets/uploads/" width="100%">
              </div>
              <div class="card-body">
                <span class="badge bg-secondary badge-category">Foods</span>
                <h6 class="card-title mt-2 mb-2">Mie Bangladesh</h6>
                <p class="card-text text-primary fw-bold">Rp. 25.000,-</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <div class="card product-card">
              <div class="product-img">
                <img src="../assets/uploads/" width="100%">
              </div>
              <div class="card-body">
                <span class="badge bg-secondary badge-category">Foods</span>
                <h6 class="card-title mt-2 mb-2">Mie Jawa</h6>
                <p class="card-text text-primary fw-bold">Rp. 25.000,-</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <div class="card product-card">
              <div class="product-img">
                <img src="../assets/uploads/" width="100%">
              </div>
              <div class="card-body">
                <span class="badge bg-secondary badge-category">Foods</span>
                <h6 class="card-title mt-2 mb-2">Mie Aceh</h6>
                <p class="card-text text-primary fw-bold">Rp. 25.000,-</p>
              </div>
            </div>
          </div>

        </div><br>
        <div class="row" id="productGrid">
          <div class="col-md-4 col-sm-6">
            <div class="card product-card">
              <div class="product-img">
                <img src="../assets/uploads/berry smooth.jpg" width="100%">
              </div>
              <div class="card-body">
                <span class="badge bg-secondary badge-category">Drinks</span>
                <h6 class="card-title mt-2 mb-2">Berry Smoothie</h6>
                <p class="card-text text-primary fw-bold">Rp. 22.000,-</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <div class="card product-card">
              <div class="product-img">
                <img src="../assets/uploads/avo smooth.jpg" width="100%">
              </div>
              <div class="card-body">
                <span class="badge bg-secondary badge-category">Drinks</span>
                <h6 class="card-title mt-2 mb-2">Avocado Smootihie</h6>
                <p class="card-text text-primary fw-bold">Rp. 22.000,-</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <div class="card product-card">
              <div class="product-img">
                <img src="../assets/uploads/cklt smooth.jpg" width="100%">
              </div>
              <div class="card-body">
                <span class="badge bg-secondary badge-category">Drinks</span>
                <h6 class="card-title mt-2 mb-2">Chocolate Smoothie</h6>
                <p class="card-text text-primary fw-bold">Rp. 22.000,-</p>
              </div>
            </div>
          </div>

        </div><br>
        <div class="row" id="productGrid">
          <div class="col-md-4 col-sm-6">
            <div class="card product-card">
              <div class="product-img">
                <img src="../assets/uploads/" width="100%">
              </div>
              <div class="card-body">
                <span class="badge bg-secondary badge-category">Snack</span>
                <h6 class="card-title mt-2 mb-2">Croffle</h6>
                <p class="card-text text-primary fw-bold">Rp. 20.000,-</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <div class="card product-card">
              <div class="product-img">
                <img src="../assets/uploads/" width="100%">
              </div>
              <div class="card-body">
                <span class="badge bg-secondary badge-category">Snack</span>
                <h6 class="card-title mt-2 mb-2">Pancake</h6>
                <p class="card-text text-primary fw-bold">Rp. 20.000,-</p>
              </div>
            </div>
          </div><br>

          <div class="col-md-4 col-sm-6">
            <div class="card product-card">
              <div class="product-img">
                <img src="../assets/uploads/" width="100%">
              </div>
              <div class="card-body">
                <span class="badge bg-secondary badge-category">Snack</span>
                <h6 class="card-title mt-2 mb-2">Donut</h6>
                <p class="card-text text-primary fw-bold">Rp. 20.000,-</p>
              </div>
            </div>
          </div>

        </div><br>
        <div class="row" id="productGrid">
          <div class="col-md-4 col-sm-6">
            <div class="card product-card">
              <div class="product-img">
                <img src="../assets/uploads/" width="100%">
              </div>
              <div class="card-body">
                <span class="badge bg-secondary badge-category">Snack</span>
                <h6 class="card-title mt-2 mb-2">Croffle</h6>
                <p class="card-text text-primary fw-bold">Rp. 20.000,-</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <div class="card product-card">
              <div class="product-img">
                <img src="../assets/uploads/" width="100%">
              </div>
              <div class="card-body">
                <span class="badge bg-secondary badge-category">Snack</span>
                <h6 class="card-title mt-2 mb-2">Pancake</h6>
                <p class="card-text text-primary fw-bold">Rp. 20.000,-</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <div class="card product-card">
              <div class="product-img">
                <img src="../assets/uploads/" width="100%">
              </div>
              <div class="card-body">
                <span class="badge bg-secondary badge-category">Snack</span>
                <h6 class="card-title mt-2 mb-2">Donut</h6>
                <p class="card-text text-primary fw-bold">Rp. 20.000,-</p>
              </div>
            </div>
          </div>

        </div>


      </div>
      <div class="col-md-5 cart-section">
        <div class="cart-header">
          <h4>Shopping Cart <i class="bi bi-cart-check"></i></h4>
          <small>Order #<span class="orderNumber">001</span></small>
        </div>
        <div class="cart-items" id="cartItems">
          <div class="text-center text-muted mt-5">
            <i class="bi bi-basket"></i>
            <p>Empty Cart</p>
          </div>
        </div>

        <div class="cart-footer">
          <div class="total-section">
            <div class="d-flex justify-content-between mb-2">
              <span>Subtotal :</span>
              <span id="subtotal">Rp. 100.000,-</span>
            </div>
            <div class="d-flex justify-content-between mb-2">
              <span>Tax (10%) :</span>
              <span id="tax">Rp. 10.000,-</span>
            </div>
            <div class="d-flex justify-content-between mb-2">
              <span>Total :</span>
              <span id="total">Rp. 110.000,-</span>
            </div>
          </div>
          <div class="row g-2">
            <div class="col-md-6">
              <button class="btn btn-outline-danger w-100">
                <i class="bi bi-trash-fill"> Clear Cart</i>
              </button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-checkout btn-outline-success w-100">
                <i class="bi bi-cash-stack"> Process Payment</i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
    integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous">
  </script>

  <script>
  // js variable : let, var, const
  // php var : $, define, const

  let nama = "Raisa Edria";
  var name = "Sabit Althaf";
  const fullname = "Langit Violet";
  // const sifatnya tetap tidak boleh merubah nilai
  // document.write()
  // console.log({
  //   "nama": name,
  //   "fullname": fullname
  // });
  // alert(nama);

  // operator
  let angka1 = 10;
  let angka2 = 20;
  console.log(angka1 + angka2);
  console.log(angka1 - angka2);
  console.log(angka1 / angka2);
  console.log(angka1 * angka2);
  console.log(angka1 % angka2);
  console.log(angka1 ** angka2);

  // operator penugasan
  let x = 10;
  x += 5; // 15
  console.log(x);

  // operator pembandingan
  // >, <, =, ==, ===, !=
  let a = 1;
  let b = 1;
  if (a === b) {
    console.log("ya")
  } else {
    console.log("tidak")
  }

  console.log(a > b)
  console.log(a < b)

  // operator logika
  // &&, AND, OR, ||, ! (tidak/not)
  let umur = 20;
  let punyaSim = true;
  if (umur >= 17 && punyaSim) {
    console.log("boleh mengemudi")
  } else {
    console.log("tidak boleh mengemudi")
  }

  // array : sebuah tipe data yang bisa memiliki nilainya lebih dari 1
  let buah = ['Pisang', 'Salak', 'Semangka'];
  console.log("buah di keranjang:", buah);
  console.log("saya mau buah :", buah[0]);
  buah[1] = "Nanas";
  console.log("buah baru :", buah);
  buah.push('Pepaya');
  console.log("Buah", buah);
  buah.pop();
  console.log("Buah", buah);
  </script>


</body>

</html>