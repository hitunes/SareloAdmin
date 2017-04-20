const app = {
  dataFetcher : function(){

    const endpoint = 'https://gist.githubusercontent.com/Miserlou/c5cd8364bf9b2420bb29/raw/2bf258763cdddd704f8ffd3ea9a3e81d25e2c6f6/cities.json';

    const cities = [];
    fetch(endpoint)
      .then(blob => blob.json())
      .then(data => cities.push(...data));

    function triga(){
       const $html = document.getElementsByTagName('html')[0];
       $html.classList.add("sidebar-lg")
        //console.log(1);
    }

    //console.log(cities);
    function findMatches(wordToMatch, cities) {
      return cities.filter(place => {
        // here we need to figure out if the city or state matches what was searched
        const regex = new RegExp(wordToMatch, 'gi');
        return place.city.match(regex) || place.state.match(regex)
      });
    }

    function numberWithCommas(x) {
      return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    }

    function displayMatches(e) {
      
      const matchArray = findMatches(this.value, cities);
      const html = matchArray.map(place => {
        const regex = new RegExp(this.value, 'gi');
        const cityName = place.city.replace(regex, `<span class="hl">${this.value}</span>`);
        const stateName = place.state.replace(regex, `<span class="hl">${this.value}</span>`);
        //console.log(place);
        return `
          <li>
              <span class="name">${cityName}, ${stateName}</span>
              <span class="population">${numberWithCommas(place.population)}</span>
          </li>
        `;
      }).join('');
      suggestions.innerHTML = html;
      const lists = Array.from(suggestions.querySelectorAll("li"));
      // stop stopPropagation of this event.........
      e.stopPropagation();
      lists.forEach(function(list){
        list.addEventListener('click', triga);
      })
      
      /* ternary operator to hide or show list */
      this.value.length > 0 ? suggestions.style.display = 'block' : suggestions.style.display = 'none';
    }

    

    const searchInput = document.querySelector('.search');
    const suggestions = document.querySelector('.suggestions');

    searchInput.addEventListener('change', displayMatches);
    searchInput.addEventListener('keyup', displayMatches);

    //a function to show sidebar as soon as I click on the list of products filtered...
    /*const $html = document.getElementsByTagName('html')[0];
    const lists = Array.from(suggestions.querySelectorAll("li"));
  

    lists.forEach(function(list){
      list.addEventListener('click', function(){
        $html.classList.add("sidebar-lg")
        console.log(this.textContent);
      });
    })*/
    

  },
  fecther: function(){
  
  var obj = {
    products: [
      {
        id: 1,
        product: "Yam",
        price: 2150,
        unit: "per 10kg",
        img: "http://www.foodsubs.com/Photos/yamaimo.jpg"
      },
      {
        id: 2,
        product: "Rice",
        price: 2450,
        unit: "per 10kg",
        img: "https://thumbs.dreamstime.com/z/unpolished-rice-whole-grain-burlap-bag-25395443.jpg"
      },
      {
        id: 3,
        product: "Egusi",
        price: 250,
        unit: "per Tin",
        img: "http://africanchop.com/smallchop/wp-content/uploads/2014/08/egusi1.jpg"
      },
      {
          id: 4,
          product: "Suya",
          price: 250,
          unit: "per wrap",
          img: "http://www.travelstart.com.ng/blog/wp-content/uploads/2014/03/Suya-1024x803.jpg"
        },
        {
          id: 5,
          product: "Semovita",
          price: 2500,
          unit: "per bag",
          img: "http://www.katointernational.com/wp-content/uploads/2015/01/semovita.png"
        },
        {
          id: 6,
          product: "Cornflakes",
          price: 1500,
          unit: "per Sachet",
          img: "http://www.sunpring.com/wp-content/uploads/2015/03/corn-flakes-manufacturing.jpg"
        },
      {
        id: 7,
        product: "Elubo",
        price: 2500,
        unit: "per Bag",
        img: "http://zippum.com/image/cache/data/swallow/sw10-500x500.jpg"
      },
      {
        id: 8,
        product: "Garri",
        price: 2500,
        unit: "per Bag",
        img: "http://madamsabi.com/image/cache/data/prodsupload/white%20garri-500x500.jpg"
      },
      {
        id: 9,
        product: "Pando Yam",
        price: 2500,
        unit: "per Bag",
        img: "http://www.healthysupplies.co.uk/pics/400x400/pounded-yam.jpg"
      },
      {
        id: 10,
        product: "Eggs",
        price: 2500,
        unit: "per Create",
        img: "https://cdn.pixabay.com/photo/2016/12/04/23/36/eggs-1882837_960_720.jpg"
      },
      {
        id: 11,
        product: "Bananas",
        price: 2500,
        unit: "per Bunch",
        img: "http://pngimg.com/uploads/banana/banana_PNG817.png"
      },
      {
        id: 12,
        product: "chicken",
        price: 2500,
        unit: "per kg",
        img: "http://dialnsearch.com/image/Whole%20Chicken167615.jpg"
      },
      {
        id: 13,
        product: "Rodo",
        price: 2500,
        unit: "per basket",
        img: "http://www.9jafoods.co/wp-content/uploads/2016/11/rodo-rspwxyz59_rodo_big_basket-400x350.jpg"
      },
      {
        id: 14,
        product: "Tomato",
        price: 2500,
        unit: "per basket",
        img: "http://www.naushieexports.com/img/tomato4_big.jpg"
      },
      {
        id: 15,
        product: "Potatoes",
        price: 2150,
        unit: "per 10kg",
        img: "http://wisconsinpotatoes.com/admin/wp-content/uploads/2014/09/yellow_potatoes.jpg"
      },
      {
        id: 16,
        product: "Efo Tete",
        price: 2150,
        unit: "per Bunch",
        img: "http://justfreshfood.com.ng/resources/image/18/7a/9.jpg"
      },
      {
        id: 17,
        product: "Wheat flour",
        price: 2150,
        unit: "per Kg",
        img: "http://i.ndtvimg.com/i/2015-06/wheat-flour-625_625x350_61434435605.jpg"
      },
      {
        id: 18,
        product: "Sugar",
        price: 2150,
        unit: "per kg",
        img: "http://www.mcnicholsplc.com/wp-content/uploads/family-granulated-sugar.png"
      },
      {
        id: 19,
        product: "Soap",
        price: 2150,
        unit: "per Park",
        img: "http://ecx.images-amazon.com/images/I/61CpVvyqSzL._SL1000_.jpg"
      },
      {
        id: 20,
        product: "Fish",
        price: 700,
        unit: "per Kg",
        img: "http://www.nairaland.com/attachments/3217770_mackerelbig_jpeg0de3d657ba3bc05478f7590c7ab76e55"
      }
    ],
    serviceChargePercent: 10,
    delivery: 1000
  };

  var dataLog = obj.products;
  
  $("#querySelector").on("keyup", function(e){
   
      $.getJSON('/api/search/'+ $("#querySelector").val())
      
      .done(function(response) {
          
          var output = '<ul class="suggestions">';
          $.each(response.data.products, function(key, val){
            
              output += `<li id="${val.id}" data-product-id="${val.id}" data-product = "${val.name}" data-price = "${val.price}" data-unit = "${val.unit}" data-img = "${val.img}">`;
              output += `<div class="clearfix pos-rel">
                    <span class="pull-left products pos-abs">${val.name}</span>
                    <span class="pull-right price">&#8358; ${val.price}</span><br>
                    <small class="pull-right">${val.unit}</small>
                </div>`;
              output += "</li>";
 
          });
          output += '</ul>';

         $(".update").html(output);
        
      }).fail(function() {
          var searchField = $("#querySelector").val();
          
          var myExp = new RegExp(searchField, 'i');
      
          var output = '<ul class="suggestions">';
          $.each(dataLog, function(key, val){
            
            if((val.unit.search(myExp) != -1) || (val.product.search(myExp) != -1)) {

                output += `<li id="${val.id}" data-product-id="${val.id}" data-product = "${val.product}" data-price = "${val.price}" data-unit = "${val.unit}" data-img = "${val.img}">`;
                output += `<div class="clearfix pos-rel">
                              <span class="pull-left products pos-abs">${val.product}</span>
                              <span class="pull-right price">&#8358; ${val.price}</span><br>
                              <small class="pull-right">${val.unit}</small>
                          </div>`;
                output += "</li>";
            }
            
          });
          output += '</ul>';
          if(searchField.length === 0){
            output = "";
          }
          $(".update").html(output);
      }).always(function(){
      
        $('.loading').hide();
      });
    });
  },
  cartCtrl: function(){
    var cart = [];
    
    //function that returns objects
    function Item (name, price, count, unit, img, product_id){
      this.name = name;
      this.price = price;
      this.count = count;
      this.unit = unit;
      this.img = img;
      this.id = product_id
    }
   
    //addItemToCart(name, price, count)
    function addItemToCart(name, price, count, unit, img, product_id){
      console.log(unit);
      // for(var i in cart){
      //   if(cart[i].name === name){
      //     cart[i].count += count;
      //     saveCart();
      //     return;
      //   }
      // }
      var item = new Item(name, price, count, unit, img, product_id);
      
      saveCartItem(item);
    }

    //removeItemFromCart(name) from the cart, just one item
    function removeItemFromCart(cart_item_id){
      var action = 'subtract';

      $.getJSON('/cart/update/' + cart_item_id + '/' + action).done(function () {
         displayCart();
      })
      // for(var i in cart){
      //   if(cart[i].name === name){
      //     cart[i].count--;
      //     if(cart[i].count === 0){
      //       cart.splice(i, 1);
      //     }
      //     break;
      //   }
      // }
      // saveCart();
    }

    //removeItemFromCartAll, all items....
    function removeItemFromCartAll(cart_item_id){
      $.getJSON('/cart/delete/' + cart_item_id ).done(function () {
         displayCart();
      })
      // for(var i in cart){
      //   if(cart[i].name === name){
      //       cart.splice(i, 1);
      //       break;
      //   }
      // }
      // saveCart();
    }

    //clear cart
    function clearCart(){
      cart = [];
      saveCart();
    }

    //return total count in the cart
    function countCart(){
      var totalCount = 0;
      for(var i in cart){
        totalCount += cart[i].count;
      }
      return totalCount;
    }

    //return total cost
    function totalCart(){
      var totalCost = 0;
      for(var i in cart){
        totalCost += cart[i].price * cart[i].count;
      }
      return totalCost;
    }

    //listCart return array[] of items
    function listCart(){
      var cartCopy = [];
      
      for(var i in cart){
        var item = cart[i];
        var itemCopy = {};
        for(var p in item){
          itemCopy[p] = item[p];
        }
        cartCopy.push(itemCopy);
      }
 
      return cartCopy;
    }

    //save cart.............
    function saveCart(){
      localStorage.setItem("shoppingCart", JSON.stringify(cart));
    } 

    //load the cart
    function loadCart(){
        cart = JSON.parse(localStorage.getItem("shoppingCart"));       
    }

    //calculates service charges here....
    function serviceChargeCtrl(percent, total_cost){
      serviceCharge = 0;
      serviceCharge = (percent/100) * total_cost;
      return serviceCharge;
    }

    //calculates service charges here....
    function deliveryCtrl(dvFee){
      return dvFee;
    }

    function a(){
      $(".empty_bag").fadeIn("slow");
      $(".full_bag").fadeOut("slow");
    }

    function b(){
      $(".full_bag").fadeIn("slow");
       $(".empty_bag").fadeOut("fast");
    }


    //function that animates counter
    function aniCounter(){
       setTimeout(function(){
          $(".items").addClass("shakers");
        }, 50);
        $(".items").removeClass("shakers");
    }


    //display items in cart
    function displayCart(){
      $("#loader").show();
      $.getJSON('/cart').done(function(response){
          
          var output = "";
          var output2 = "";
          var totalCount = 0;
          var total_cost = 0;
          
          $.each(response.data.cart, function(key, val){
            
            output += `
            <li class="pos-rel animated" data-product="${val.name}" id="pr_${val.name}">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="row">
                          <div class="col-xs-5 p-r-0">
                              <div class="thumbnail">
                                  <img src="${val.img}">
                              </div>
                          </div>
                          <div class="col-xs-7 p-l-0">
                              <div class="pr-text">
                                  <h4 class="m-b-0 m-t-5">${val.name}</h4>
                                  <small>${val.options.unit}</small>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xs-3 p-l-0">
                      <div class="counter">
                          <div class="minus" data-product="${val.name}" data-cart-item-id="${key}">-</div>
                          <div class="count">${val.qty}</div>
                          <div class="plus" data-product="${val.name}" data-cart-item-id="${key}">+</div>
                      </div>
                  </div>
                  <div class="col-xs-3">
                      <h4 class="m-b-0 m-t-5">&#8358; ${roundToTwo(val.price).toLocaleString()}</h4>
                  </div>
              </div>
              <span class="fa fa-remove pos-abs" data-product="${val.name}" data-cart-item-id="${key}"></span>
           </li>`;
           
           output2 += `
          <tr class="p-t-14 width-33_3p" data-product="${val.name}" id="pr_${val.name}">
              <td class="">
                  <div class="clearfix">
                      <div class="f-left p-r-15">
                          <img src="${val.img}" class="width-40 h-40 bd-50p">
                      </div>
                      <div class="f-left">
                          <div>${val.name}</div>
                          <div class="f-12 opacity-50">${val.options.unit}</div>
                      </div>
                  </div>
              </td>
              <td class="width-33_3p">
                  <div class="counter text-center p-t-0">
                      <div class="minus" data-cart-item-id="${key}">-</div>
                      <div class="count">${val.qty}</div>
                      <div class="plus" data-cart-item-id="${key}">+</div>
                  </div>
              </td>
              <td class="p-t-14 width-33_3p text-right">
                  <div class="w-600 p-r-12">
                      ₦ <span class="cash">${roundToTwo(val.price).toLocaleString()}</span>
                  </div>
                  <button class="btn bg-transparent-black opacity-50 f-12 removeItem" data-cart-item-id="${key}">REMOVE</button>
              </td>
          </tr>`;

            totalCount += val.qty;
            total_cost += val.subtotal;
            
        })
        total_cost =  roundToTwo(total_cost)
        total_cost === 0 ? a() : b();
          for (var i = 0; i < response.data.charges.length; i++) {
        
             if(response.data.charges[i].name == "Delivery fee"){
               var delivery_fee = deliveryCtrl(response.data.charges[i].fixed_amount);
               $("#deliveryFee").html(roundToTwo(delivery_fee.toLocaleString()));
               
             }

             if(response.data.charges[i].name == "Service Charge"){
               var service_charge = serviceChargeCtrl(response.data.charges[i].percentage, total_cost);
               service_charge = roundToTwo(service_charge);                            
               $("#serviceCharge").html(service_charge.toLocaleString());
             }
      
          }
        
          
          $("#basketList").html(output);
          $(".items").html(totalCount/*countCart()*/);
          $("#totalP").html(total_cost.toLocaleString());
          $("#cartTable").html(output2);

          // $("#serviceCharge").html(serviceChargeCtrl(10));
          // $("#deliveryFee").html(deliveryCtrl(1000));
          // $("#grandTP").html(totalCart() + serviceChargeCtrl(10) + deliveryCtrl(1000));
          $("#grandTP").html((total_cost + service_charge + delivery_fee).toLocaleString('en-NG')); 
          $('#loader').hide();
      })
      .fail(function() {
          setTimeout(function() {
            $('#loader').hide();
              
              }, 5000);
          });
    }

    function saveCartItem(item){

      postData = item
        $.post('/cart/add', postData, function (data) {
          // displayCart();
        })
    }

    function updateCartItem(cart_id) {
       var action = 'addition';

      $.getJSON('/cart/update/' + cart_id + '/' + action).done(function () {
         displayCart();
      })
    }

  



    $(document).on('click', '.suggestions li', function(e){
        e.preventDefault();
      
      //open cart if width is big enough...
        if($(window).width() >= 768){
          $("html").addClass("open"); 
        }
       //name, price, and count
        var name = $(this).attr("data-product");
        var price = $(this).attr("data-price");
        var unit = $(this).attr("data-unit");
        var img = $(this).attr("data-img");
        var product_id = $(this).attr("data-product-id");
        addItemToCart(name, price, 1, unit, img, product_id);
        displayCart();
        aniCounter();
        e.stopImmediatePropagation();
    });

    //remove items from cart
    $(document).on('click', 'li .fa-remove', function(){
      var id = $(this).attr('data-cart-item-id');
      removeItemFromCartAll(id);
  
    });

    $(document).on('click', '.counter .plus', function(){
      var name = $(this).attr('data-product');
      var cart_id = $(this).attr('data-cart-item-id');
      
      updateCartItem(cart_id);
    });

    $(document).on('click', '.counter .minus', function(){
      var id = $(this).attr('data-cart-item-id');
      removeItemFromCart(id);
    });

    $(document).on('click', '.removeItem', function(){
      var id = $(this).attr('data-cart-item-id');
      removeItemFromCartAll(id);
    });


    saveCart();
    loadCart();
    displayCart();


  },

  radioChooser: function(para){
    $(document).find("input[type='radio']").on('change', function(){
      $(document).find("." + para).removeClass("" + para);
       $(this).parent().addClass(""+ para);
    });
  },
  buttonChooser: function(){
    $("table").find("input[type='radio']").on("change", function(){
        $("table").find(".bg-gray-light").removeClass("bg-gray-light");
        $(this).parents("tr").addClass("bg-gray-light");
       
    });
  },
  validator: function(){
    //console.log($("#addressForm").parsley().isValid());
    var form = $("#addressForm");
    if( form.parsley().isValid()){
      $("#submit").prop('disabled', false); 
    }
    else{
      $("#submit").prop('disabled', 'disabled'); 
    }
  },
  contentEditor: function(){
    var editBtn = $('#editBtn');
    var editor = $('#editor');
    var receiverNo = $('#receiverNo');

    editBtn.on('click', function(e) {
      e.preventDefault();
        
        if (!editor[0].isContentEditable) {
            console.log(editor);
            editor[0].contentEditable = true;
            editor[0].focus();
            editBtn.text('Save');
            editBtn.css('backgroundColor', '#6F9');
        } else {
           
            editor[0].contentEditable = false;
            // Change Button Text and Color
            editBtn.text('Edit');
            editBtn.css('backgroundColor', '#F96');
           
            receiverNo.val(editor[0].innerHTML);
        
        }
    });
  },
selectDeliveryDate: function () {
  $('.delivery_date').on('click', function ( ) {
      var option = $(document).find("input[type='radio']");
      //get unselect previously selected radio button
      $("input:radio").attr("checked", false);
      $("input:radio").removeAttr("checked");
      var delivery_date = $(this).data("payload");
      $(".delivery_date_v").val(delivery_date);    
  });
},
  inlineEditor: function(){
    
    var editBtn = $('.change');
    /*var editor = editBtn.parents("td");
    console.log(editor);*/

    editBtn.on('click', function(e) {
       //console.log($(this).parent());
        e.preventDefault();
       
       var editor = $(this).parent()[0].previousElementSibling.firstElementChild;
      
       if(editor.disabled){
         editor.disabled = false;
         $(this).text('Save');
       }
       else{
         editor.disabled = true;
         $(this).text('Change');
       }
    });
    
  },
  preventFormSubmit: function(){
    $(window).keydown(function(event){
      if(event.keyCode == 13) {
        event.preventDefault();
        return false;
      }
    });
  },

   toggleSidebars: function(){
    $(".cart_toggle").on("click", function(){
        $("html").removeClass("open_left");
        $("html").toggleClass("open");
    });

    $(".menu_toggle").on("click", function(){
        $("html").removeClass("open");
        $("html").toggleClass("open_left");
    });
  },
  numberWithCommas: function (x) {
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return parts.join(".");
  },
   toggleCollapse: function(){
		const mores = Array.from(document.querySelectorAll(".mores"));
    
	  const tables = Array.from(document.querySelectorAll(".tables"));
  
		//textcontent varaible;
		let texts;
		//css display properties block and none...
		let c, d;

		//boolean to control toggle function....
		let booled = true;

		//first function to show more
		function showMore(){
			c = "none"; d = "block";
			texts = "Show Full Receipt";
			booled = false;
		}
		//second function that show less
		function showLess(){
			 c = "block"; d = "none";
			 texts = "Hide Full Receipt";
			 booled = true;
		}
		//interestHandler handles toggling between first and second function
		function moreHandler(){
				console.log(this.textContent);
				
				booled ? showMore() : showLess();
				//change button textcontent..
				this.textContent = texts;
				//hide less part or show it instead...
				tables[mores.indexOf(this)].querySelector('tbody').style.display = c;
				
		}

		mores.forEach(function(more){
			 more.addEventListener('click', moreHandler);
		});
	}
}
function roundToTwo(num) {    
    return +(Math.round(num + "e+2")  + "e-2");
}