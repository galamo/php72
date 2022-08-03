function checkoutOrder() {
    const confirmId = Math.floor(Math.random() * 9999999);
    Swal.fire({
        title: `Your order confirmed, Order number: ${confirmId}`,
        confirmButtonText: 'Close',
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            window.location.href = "http://localhost/php72/web2/"
        }
    })


}