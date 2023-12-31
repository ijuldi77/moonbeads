$(function () {
  $(".tampilTambah").on("click", function () {
    $("#Labform").html("Tambah Produk");
    $("#subForm").html("Tambah Produk");

    // Set elemen formulir ke nilai default atau kosong
    $("#editNama").val("");
    $("#editJenis").val("");
    $("#editHarga").val("");
    $("#editFoto").val("");
    $("#id_produk").val("");
  });

  $(".tampilEdit").on("click", function () {
    $("#Labform").html("Edit Produk");
    $("#subForm").html("Edit Produk");
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
        $("#id_produk").val(data.id_produk);
        $("#editNama").val(data.nama);
        $("#editJenis").val(data.jenis_id);
        $("#editHarga").val(data.harga);

        // Set nilai input tipe foto sesuai dengan nama file foto dari JSON
        $("#editFoto").val(data.foto);
      },
    });
  });

  $(".tampilHapus").on("click", function () {
    const id_produk = $(this).data("id");
    console.log(id_produk);
    Swal.fire({
      title: "yakin menghapus product?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Hapus",
      cancelButtonText: "tidak",
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = `http://localhost/moonbeads/public/produk/hapus/${id_produk}`;
      }
    });
  });

  $(".addCart").on("click", function () {
    console.log("Tombol diklik!");
    const id_produk = $(this).data("id");
    console.log("ID Produk:", id_produk);

    $.ajax({
      url: "http://localhost/moonbeads/public/keranjang/getAdd",
      data: { id_produk: id_produk },
      method: "post",
      dataType: "json",
      success: function (data) {
        console.log("Produk ditambahkan ke keranjang:", data);
      },
      error: function (xhr, status, error) {
        console.error("Error:", status, error);
      },
    });
  });
  
});

