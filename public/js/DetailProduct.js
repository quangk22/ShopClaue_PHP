
let products = null;
fetch('../public/js/Product.json')
    .then(response => response.json())
    .then(data => {
        products = data;
        console.log(products);
        showDetail();
    })
    function showDetail(){
      let detail = document.querySelector('.detail');
      const urlParams = new URLSearchParams(window.location.search);
      const productId = urlParams.get('id');
      console.log(productId);
      const product = products.find(item => item.id === parseInt(productId));
      if(!product){
        console.log(" ko tìm thấy sản phẩm");
    }
    var imageDetail = document.querySelectorAll( "#imgProduct > img" );
    var imageDetail2 = document.querySelectorAll( "#imgProduct2 > img" );
    imageDetail[0].src = product.img1;
    imageDetail[1].src = product.img2;
    imageDetail[2].src = product.img3;
    imageDetail[3].src = product.img4;
    imageDetail2[0].src = product.img1;
    imageDetail2[1].src = product.img2;
    imageDetail2[2].src = product.img3;
    imageDetail2[3].src = product.img4;
    detail.querySelector('#nameProduct').innerText = product.name;
    detail.querySelector('#priceProduct').innerText = '$' + product.price1+'.000' + " - "+'$' + product.price2+'.000';
    detail.querySelector('#description').innerText = product.description;
    }
