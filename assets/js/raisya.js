// js variable : let, var, const
// php var : $, define, const

// let nama = "Raisa Edria";
// var name = "Sabit Althaf";
// const fullname = "Langit Violet";
// const sifatnya tetap tidak boleh merubah nilai
// document.write()
// console.log({
//   "nama": name,
//   "fullname": fullname
// });
// alert(nama);

// operator
// let angka1 = 10;
// let angka2 = 20;
// console.log(angka1 + angka2);
// console.log(angka1 - angka2);
// console.log(angka1 / angka2);
// console.log(angka1 * angka2);
// console.log(angka1 % angka2);
// console.log(angka1 ** angka2);

// operator penugasan
// let x = 10;
// x += 5; // 15
// console.log(x);

// operator pembandingan
// >, <, =, ==, ===, !=
// let a = 1;
// let b = 1;
// if (a === b) {
// console.log("ya");
// } else {
// console.log("tidak");
// }

// console.log(a > b);
// console.log(a < b);

// operator logika
// &&, AND, OR, ||, ! (tidak/not)
// let umur = 20;
// let punyaSim = true;
// if (umur >= 17 && punyaSim) {
// console.log("boleh mengemudi");
// } else {
// console.log("tidak boleh mengemudi");
// }

// array : sebuah tipe data yang bisa memiliki nilainya lebih dari 1
// let buah = ["Pisang", "Salak", "Semangka"];
// console.log("buah di keranjang:", buah);
// console.log("saya mau buah :", buah[0]);
// buah[1] = "Nanas";
// console.log("buah baru :", buah);
// buah.push("Pepaya");
// console.log("Buah", buah);
// buah.pop();
// console.log("Buah", buah);

// -> : php
// .
// document.getElementById("product-title").innerHTML =
  // "<p>Data Product di dalam element p</p>";
// document.getElementById("product-title").innerText = "The Data Product";
// document.querySelector("#product-title");
let btn = document.getElementsByClassName("category-btn");
// btn[1].style.color = "pink"
console.log("ini button", btn);
let buttons = document.querySelectorAll(".category-btn");
console.log("buttons", buttons);
// buttons.forEach(function(btn) {});
buttons.forEach((btn) => {
  btn.style.color = "pink";
  console.log(btn);
});
// document.querySelector('.category-btn');

let card = document.getElementById("card");
let h3 = document.createElement("h3");
let textH3 = document.createTextNode("Welcome");
h3.textContent = "Welcome with textContent";

let p = document.createElement("p");
// p.innerText = "Jadi ey";
p.textContent = "Jadi oy";

// nambahin elemen di dalam card
card.appendChild(h3);
card.appendChild(p);

let currentCategory = "all";

function filterCategory(category, event) {
  currentCategory = category;

  let buttons = document.querySelectorAll(".category-btn");
  buttons.forEach((btn) => {
    btn.classList.remove("active");
    btn.classList.remove("btn-primary");
    btn.classList.add("btn-outline-primary");
  });
  event.classList.add("active");
  event.classList.remove("btn-outline-primary");
  event.classList.add("btn-primary");
  console.log({
    currentCategory: currentCategory,
    category: category,
    event: event,
  });
  renderProducts();
}

function renderProducts(searchProduct = "") {
  const productGrid = document.getElementById("productGrid");
  productGrid.innerHTML = "";
  // console.log(products);

  // filter
  const filtered = products.filter((p) => {
    // shorthand / ternery
    const matchCategory = currentCategory === "all" || p.category_name === currentCategory;
    const matchSearch = p.product_name.toLowerCase().includes(searchProduct);
    return matchCategory && matchSearch;
  });

  // munculin data dari table products
  filtered.forEach((product) => {
    const col = document.createElement("div");
    col.className = "col-md-4 col-sm-6";
    col.innerHTML = `<div class="card product-card">
      <div class="product-img">
        <img src="../${product.product_photo}" width="100%">
      </div>
      <div class="card-body">
        <span class="badge bg-secondary badge-category">${product.category_name}</span>
        <h6 class="card-title mt-2 mb-2">${product.product_name}</h6>
        <p class="card-text text-primary fw-bold">Rp. ${product.product_price}</p>
      </div>
    </div>`;
    productGrid.appendChild(col);
  });
}

// useEffect(() => {
// }, [])

// DomContentLoaded : akan meliad function pertama kali
renderProducts();
document.getElementById('searchProduct').addEventListener('input', function(e){
  const searchProduct = e.target.value.toLowerCase();
  renderProducts(searchProduct);
  // console.log(searchProduct);
  // alert("eyy");

})
