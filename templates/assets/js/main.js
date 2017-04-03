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
      e.preventDefault();
      $.getJSON('#')
      
      .done(function(response) {
          
          var search = $("#querySelector").val();
          var regex = new RegExp(search, 'i');
          var output;
          $.each(response.products, function(key, val){
            console.log(response.products);
            //console.log(key, val);
            if((val.unit.search(regex) != -1) || (val.name.search(regex) != -1)){
              output += "<li>";
              output += `<div class="clearfix pos-rel">
                    <span class="pull-left products pos-abs">${val.product}</span>
                    <span class="pull-right price">&#8358; ${val.product}</span><br>
                    <small class="pull-right">${val.product}</small>
                </div>`;
              output += "</li>";
            }
          });
          $(".suggestions").html(output);
      }).fail(function() {
          var searchField = $("#querySelector").val();
          
          var myExp = new RegExp(searchField, 'i');
      
          var output = '<ul class="suggestions">';
          $.each(dataLog, function(key, val){
            
            if((val.unit.search(myExp) != -1) || (val.product.search(myExp) != -1)) {

                output += `<li id="${val.id}" data-product = "${val.product}" data-price = "${val.price}" data-unit = "${val.unit}" data-img = "${val.img}">`;
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
        console.log("oh!");
        $('.loading').hide();
      });
    });
},

  cartCtrl: function(){
    var cart = [];
    console.log(cart);
    //function that returns objects
    function Item (name, price, count, unit, img){
      this.name = name;
      this.price = price;
      this.count = count;
      this.unit = unit;
      this.img = img;
    }
   
    //addItemToCart(name, price, count)
    function addItemToCart(name, price, count, unit, img){
      for(var i in cart){
        if(cart[i].name === name){
          cart[i].count += count;
          saveCart();
          return;
        }
      }
      var item = new Item(name, price, count, unit, img);
      cart.unshift(item);
      saveCart();
    }

    //removeItemFromCart(name) from the cart, just one item
    function removeItemFromCart(name){
      for(var i in cart){
        if(cart[i].name === name){
          cart[i].count--;
          if(cart[i].count === 0){
            cart.splice(i, 1);
          }
          break;
        }
      }
      saveCart();
    }

    //removeItemFromCartAll, all items....
    function removeItemFromCartAll(name){
      for(var i in cart){
        if(cart[i].name === name){
            cart.splice(i, 1);
            break;
        }
      }
      saveCart();
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
      console.log(cartCopy);
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
    function serviceChargeCtrl(percent){
      serviceCharge = 0;
      serviceCharge = (percent/100) * totalCart();
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


    //display items in cart
    function displayCart(){
      var cartArray = listCart();
      
      cartArray.length === 0 ? a() : b();

      var output = "";
      for(var i in cartArray){
        output += `
           <li class="pos-rel animated" data-product="${cartArray[i].name}" id="pr_${cartArray[i].name}">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="row">
                          <div class="col-xs-5 p-r-0">
                              <div class="thumbnail">
                                  <img src="${cartArray[i].img}">
                              </div>
                          </div>
                          <div class="col-xs-7 p-l-0">
                              <div class="pr-text">
                                  <h4 class="m-b-0 m-t-5">${cartArray[i].name}</h4>
                                  <small>${cartArray[i].unit}</small>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xs-3 p-l-0">
                      <div class="counter">
                          <div class="minus" data-product="${cartArray[i].name}">-</div>
                          <div class="count">${cartArray[i].count}</div>
                          <div class="plus" data-product="${cartArray[i].name}">+</div>
                      </div>
                  </div>
                  <div class="col-xs-3">
                      <h4 class="m-b-0 m-t-5 align-right">&#8358; ${cartArray[i].price}</h4>
                  </div>
              </div>
              <span class="fa fa-remove pos-abs" data-product="${cartArray[i].name}"></span>
           </li>
        `;
      }
     
      $("#basketList").html(output);
      $("#items").html(countCart());
      $("#totalP").html(totalCart());
      $("#serviceCharge").html(serviceChargeCtrl(10));
      $("#deliveryFee").html(deliveryCtrl(1000));
      $("#grandTP").html(totalCart() + serviceChargeCtrl(10) + deliveryCtrl(1000));
    }

  



    $(document).on('click', '.suggestions li', function(e){
        e.preventDefault();
       //add open to html
       $("html").addClass("open");
       //name, price, and count
        var name = $(this).attr("data-product");
        var price = $(this).attr("data-price");
        var unit = $(this).attr("data-unit");
         var img = $(this).attr("data-img");
        addItemToCart(name, price, 1, unit, img);
        displayCart();
        console.log(cart);
        e.stopImmediatePropagation();
    });

    //remove items from cart
    $(document).on('click', 'li .fa-remove', function(){
      var name = $(this).attr('data-product');
      removeItemFromCartAll(name);
      displayCart();
    });

    $(document).on('click', '.counter .plus', function(){
      var name = $(this).attr('data-product');
     
      addItemToCart(name, 0, 1, 0, 0);
      displayCart();
    });

    $(document).on('click', '.counter .minus', function(){
      var name = $(this).attr('data-product');
      removeItemFromCart(name);
      displayCart();
    });

    //saveCart();
    loadCart();
    displayCart();
  },
  switchForm : function(){

        //var current_fs, next_fs, previous_fs; //fieldsets
        //var left, opacity, scale; //fieldset properties which we will animate
       // var animating; //flag to prevent quick multi-click glitches
	   let current_fs,
	   next_fs,
	   previous_fs,
	   left,
	   opacity,
	   scale,
	   animating;

	   const next = Array.from(document.querySelectorAll('.next'));
	   const previous = document.querySelectorAll('.previous');
     const prowess = document.getElementById('progressbar');
	   console.log(next);
	   //arrays of element...
	   const progressbar = prowess.querySelectorAll('li');
	   const fieldsets = Array.from(document.getElementsByTagName('fieldset'));
	   //console.log(fieldsets);
	 
	   function clickHandler () {
		 // if(animating){ return false;}
		  //animating = true;
		  current_fs = this.parentNode;
		 // console.log(current_fs);
		  next_fs = this.parentNode.nextElementSibling; 
		  progressbar[fieldsets.indexOf(next_fs)].classList.add("active");
		  next_fs.classList.add("current");
		  next_fs.style.display = 'block';
		  current_fs.classList.remove('current');
		  current_fs.classList.add('outClass');
		   current_fs.style.display = 'none';
	   }

	    function clickHandler2 () {
		 // if(animating){ return false;}
		  //animating = true;
		  current_fs = this.parentNode;
		  console.log(current_fs);
		  prev_fs = this.parentNode.previousElementSibling; 
		  console.log(prev_fs);
		  progressbar[fieldsets.indexOf(current_fs)].classList.remove("active");
		  current_fs.classList.remove("current");
		  current_fs.style.display = 'none';
		  prev_fs.classList.add('current');
		  prev_fs.classList.remove('outClass');
		  prev_fs.style.display = 'block';
	   }

	   next.forEach(function(nexting){
		    nexting.addEventListener('click', clickHandler);
	   });

	   previous.forEach(function(prev){
		   prev.addEventListener('click', clickHandler2);
	   });
	  

        /*$(".next").click(function(){
          if(animating) return false;
          animating = true;

          current_fs = $(this).parent();
          next_fs = $(this).parent().next();

          //activate next step on progressbar using the index of next_fs
          $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

          //show the next fieldset
          next_fs.show();
          //hide the current fieldset with style
          current_fs.animate({opacity: 0}, {
          step: function(now, mx) {
              //as the opacity of current_fs reduces to 0 - stored in "now"
              //1. scale current_fs down to 80%
              scale = 1 - (1 - now) * 0.2;
			  console.log(now);
              //2. bring next_fs from the right(50%)
              left = (now * 50)+"%";
              //3. increase opacity of next_fs to 1 as it moves in
              opacity = 1 - now;
              current_fs.css({'transform': 'scale('+scale+')'});
              next_fs.css({'left': left, 'opacity': opacity});
            },
            duration: 800,
            complete: function(){
              current_fs.hide();
              animating = false;
            }//,
            //this comes from the custom easing plugin
            //easing: 'easeInOutBack'
          });
        });

        $(".previous").click(function(){
          if(animating) return false;
          animating = true;

          current_fs = $(this).parent();
          previous_fs = $(this).parent().prev();

          //de-activate current step on progressbar
          $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

          //show the previous fieldset
          previous_fs.show();
          //hide the current fieldset with style
          current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
              //as the opacity of current_fs reduces to 0 - stored in "now"
              //1. scale previous_fs from 80% to 100%
              scale = 0.8 + (1 - now) * 0.2;
              //2. take current_fs to the right(50%) - from 0%
              left = ((1-now) * 50)+"%";
              //3. increase opacity of previous_fs to 1 as it moves in
              opacity = 1 - now;
              current_fs.css({'left': left});
              previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
            },
            duration: 800,
            complete: function(){
              current_fs.hide();
              animating = false;
            }//,
            //this comes from the custom easing plugin
            //easing: 'easeInOutBack'
          });
        });
*/
    $(".submit").click(function(){
      return false;
    })
  }  
  
}