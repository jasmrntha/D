<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>
    <title>week 4 - js training</title>

    <script>
        var name = document.getElementById("id")
        function changeText() {
            var span = document.getElementById("output"); //mendapatakan object berupa tulisan dgn ID output
            var textBox = document.getElementById("textbox"); //mendapatkan object dgn ID textBox
            textBox.style.color = "blue";
            span.innerHTML = textBox.value //mengubah tulisan span js isi textbox
        }
    </script>
</head>

<body>
    <div class="container mt-5"> <!--contoh 1-->
        <script>
            function showAlert() {
                alert("alert")
            }
        </script>
        <button class="btn btn-info" onclick="showAlert()">klik disini buat manggil function</button> <br>
        <button class="btn btn-primary" onclick="alert('alerted')">klik disini (inline alert)</button> <br>
        <button onclick="changeText()" class="btn btn-warning">click</button>
        <span id="output">replace</span>
        <input id="textbox" type="text" class="form-control"></input>
    </div>
    <div class="container mt-5"> <!--contoh 2-->
        <script>
            function pertambahan() {
                var bil1 = document.getElementById("bil1")
                var bil2 = document.getElementById("bil2")
                var hasil = document.getElementById("hasil")

                if (bil1.value == "") {
                    alert("Bilangan 1 belum diisi")
                    bil1.focus() //meletakkan kursor di input form
                    return false
                } else if (bil2.value == "") {
                    alert("Bilangan 2 belum diisi")
                    bil2.placeholder = "mohon diisi angka"
                    bil2.focus()
                    return false
                } else {
                    hasil.innerHTML = parseInt(bil1.value) + parseInt(bil2.value)
                }
            }

            function perkalian() {
                var bil1 = document.getElementById("bil1")
                var bil2 = document.getElementById("bil2")
                var hasil = document.getElementById("hasil")

                if (bil1.value == "") {
                    alert("Bilangan 1 belum diisi")
                    return false
                } else if (bil2.value == "") {
                    alert("Bilangan 2 belum diisi")
                    return false
                } else {
                    hasil.innerHTML = bil1.value * bil2.value
                }
            }

            function validateForm() {
                console.log("console log")
                return false //kembalikan false -> berhenti, jika true -> buka halaman action print baris sebelumnya saja
                console.log("return false")
                return true //ketemu return akan selalu exit/otomatis tdk menjalankan baris bawahnya
                console.log("return true")
            }

            function validateInput() {
                var input = document.getElementById("bil1")
                if (input.value == "") {
                    alert("bilangan belum diisi")
                    return false
                } else {
                    console.log("trims")
                    return true
                }
            }

            function validateNRP() {
                var nrp = document.getElementById("nrp")

                //check angka atau huruf
                if (isNaN(nrp.value)) {
                    alert("NRP harus angka")
                    nrp.focus()
                    return false
                }

                //check diisi atau tidak
                if (nrp.value == "") {
                    alert("NRP harus diisi")
                    nrp.focus()
                    return false
                }

                //check panjang nrp
                if (nrp.value.length < 10) {
                    alert("NRP kurang dari 10 angka")
                    nrp.focus()
                    return false
                } else if (nrp.value.length > 10) {
                    alert("NRP lebih dari 10 angka")
                    nrp.focus()
                    return false
                } else {
                    console.log("berhasil")
                    return true
                }

            }

        </script>

        <hr class="border border-dark border-3 opacity-75">
        <form>
            <div class="form-group ">
                <label for="bil1">bilangan 1 : </label>
                <input type="number" id="bil1" class="form-control">
            </div>
            <div class="form-group">
                <label for="bil2">Bilangan 2 : </label>
                <input type="number" id="bil2" class="form-control">
            </div>
            <input type="button" class="btn btn-primary" value="penjumlahan" onclick="pertambahan()">
            <input type="button" class="btn btn-info" value="perkalian" onclick="perkalian()">
            <input type="reset" class="btn btn-danger" value="ulang">
            <h3>hasil : <div id="hasil"></div>
            </h3>
        </form>
    </div>

    <div class="container mt-5"> <!--contoh 3-->
        <hr class="border border-dark border-3 opacity-75">
        <form action="https://www.google.com" method="get" onsubmit="return validateInput()">
            <input type="submit" class="btn btn-primary mb-2" value="kirim">
            <input type="number" class="form-control" placeholder="harus diisi" id="bil1" name="bil1">
        </form>
    </div>

    <div class="container my-5">
        <hr>
        <form class="form-group" onsubmit="return validateNRP()" action="https://www.google.com" method="get">
            <label for="nrp">Masukkan NRP</label>
            <input type="text" id="nrp" class="form-control">
            <input type="submit" value="KIRIM" class="btn btn-primary">
        </form>
    </div>
</body>

</html>
