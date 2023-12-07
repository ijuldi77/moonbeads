$(function () {
  $(".tampilTambah").on("click", function () {
    $("#labelForm").html("Tambah Produk");
    $("#submitForm").html("Tambah Produk");

    // Set elemen formulir ke nilai default atau kosong
    $("#editNama").val("");
    $("#editJenis").val("");
    $("#editHarga").val("");
    $("#editFoto").val("");
    $("#id_produk").val("");
  });

  // $(".tampilEdit").on("click", function () {
  //   $("#labelForm").html("Edit Produk");
  //   $("#submitForm").html("Edit Produk");
  //   $("form").attr("action", "http://localhost/moonbeads/public/produk/edit");

  //   const id_produk = $(this).data("id");
  //   $.ajax({
  //     url: "http://localhost/moonbeads/public/produk/getEdit",
  //     data: { id_produk: id_produk },
  //     method: "post",
  //     dataType: "json",
  //     success: function (data) {
  //       // Set nilai untuk elemen-elemen formulir edit
  //       $("#editNama").val(data.nama);
  //       $("#editJenis").val(data.jenis);
  //       $("#editHarga").val(data.harga);

  //       // Tambahkan perintah berikut untuk menetapkan nama file foto yang sudah ada
  //       $("#editFoto").val(data.foto);

  //       $("#id_produk").val(data.id_produk);
  //     },
  //   });
  // });
  $(".tampilEdit").on("click", function () {
    $("#labelForm").html("Edit Produk");
    $("#submitForm").html("Edit Produk");
    $("form").attr("action", "http://localhost/moonbeads/public/produk/edit");

    // const id_produk = $(this).data("id");
    const id_produk = $(this).data("bs-id");
    $.ajax({
      url: "http://localhost/moonbeads/public/produk/getEdit",
      data: { id_produk: id_produk },
      method: "post",
      dataType: "json",
      success: function (data) {
        // Set nilai untuk elemen-elemen formulir edit
        console.log(data);
        $("#editNama").val(data.nama);
        $("#editJenis").val(data.jenis);
        $("#editHarga").val(data.harga);

        // Set nilai input tipe foto sesuai dengan nama file foto dari JSON
        $("#editFoto").val(data.foto);

        var hiddenInput = document.getElementById("idProduk");
        hiddenInput.value(data.id_produk);
      },
    });
  });
});
