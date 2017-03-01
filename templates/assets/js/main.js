const app = {
  dataFetcher : function(){
    const endpoint = 'https://gist.githubusercontent.com/Miserlou/c5cd8364bf9b2420bb29/raw/2bf258763cdddd704f8ffd3ea9a3e81d25e2c6f6/cities.json';

    const cities = [];
    fetch(endpoint)
      .then(blob => blob.json())
      .then(data => cities.push(...data));

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

    function displayMatches() {
      
      const matchArray = findMatches(this.value, cities);
      const html = matchArray.map(place => {
        const regex = new RegExp(this.value, 'gi');
        const cityName = place.city.replace(regex, `<span class="hl">${this.value}</span>`);
        const stateName = place.state.replace(regex, `<span class="hl">${this.value}</span>`);
        return `
          <li>
            <label>
                <input type="checkbox" class="products">
                <span class="name">${cityName}, ${stateName}</span>
                <span class="population">${numberWithCommas(place.population)}</span>
            </label>
          </li>
        `;
      }).join('');
      suggestions.innerHTML = html;
      /* ternary operator to hide or show list */
      this.value.length > 0 ? suggestions.style.display = 'block' : suggestions.style.display = 'none';

      //a function to show sidebar as soon as I click on the list of products filtered...
      const $html = document.getElementsByTagName('html')[0];
      const lists = Array.from(suggestions.querySelectorAll("li"));

      lists.forEach(function(list){
        list.addEventListener('click', function(){
          $html.classList.add("sidebar-lg")
          console.log(this.textContent);
        });
      })
     
      
  
    }

    const searchInput = document.querySelector('.search');
    const suggestions = document.querySelector('.suggestions');

    searchInput.addEventListener('change', displayMatches);
    searchInput.addEventListener('keyup', displayMatches);
  }
}