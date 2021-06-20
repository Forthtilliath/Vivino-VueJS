<div id="vue-app" class="lobby-container">
  <div @click="cancelSearch" class="cancel" v-if="searchKey || countrySelected || grapesSelected">
    <h5>Annuler la recherche</h5>
    <i class="fas fa-times"></i>
  </div>

  <ul>
    <li class="name">
      <i class="fas fa-search" @click="searchInput('name')"></i>
      <input v-if="inputType == 'name'" v-model="searchKey" type="search" class="search" placeholder="Entrez le nom d'un vin...">
    </li>

    <li class="country">
      <i class="fas fa-globe-europe" @click="searchInput('country')"></i>
      <select v-if="inputType == 'country'" name="" id="" v-model="countrySelected">
        <option value="">Choisissez un pays</option>
        <option v-for="option in countriesOption" :value="option.id">{{option.name}}</option>
      </select>
    </li>

    <li class="grapes">
      <i class="fas fa-wine-glass-alt" @click="searchInput('grapes')"></i>
      <div v-if="inputType == 'grapes'" class="radio-container">
        <div v-for="grape in grapesRadio" class="radio">
          <label :for="grape.name">{{grape.name}}</label>
          <input type="radio" class="radio-button" v-model="grapesSelected" :id="grape.name" :value="grape.name" />
        </div>
      </div>
    </li>
  </ul>

  <h1 v-if="inputType == ''" class="title">Liste des vins</h1>
  <h3 v-if="search.length == 0">Aucun résultat</h3>

  <transition-group name="item-anim" tag="div" class="list-container">
    <div class="wine-list" v-for="wine, id in search" :key="wine.id">
      <div class="wine-card">
        <div class="card-header">
          <h2>{{wine.name}}</h2>
          <i @click="removeItem(id)" class="fas fa-times"></i>
        </div>
        <div class="container">
          <div class="text-container">
            <div class="buttons">
              <h4>{{wine.year}}</h4>
              <h4>{{wine.country}}</h4>
              <h4>{{wine.grapes}}</h4>
            </div>
            <div class="location">
              <i class="fas fa-map-marker-alt"></i>
              <span> {{wine.region}}</span>
            </div>
            <p>{{wine.description}}</p>
          </div>
          <img :src="'assets/uploads/' + wine.picture" alt="phot-bouteille">
        </div>
      </div>
    </div>
  </transition-group>
</div>