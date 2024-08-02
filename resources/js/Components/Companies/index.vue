

<template lang="">
    <div>
    
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Website</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="each_company in companies" :key="each_company.id">
      <th scope="row">{{each_company.name}}</th>
      <td>{{each_company.email}}</td>
      <td>{{each_company.address}}</td>
      <td>{{each_company.website}}</td>
    </tr>
    
  </tbody>
</table>
    </div>
</template>
<script>
import {onMounted} from "vue"  // q k yeh vue2 mai tha 
import useCompanies from "../../composables/companies.js";
export default {

    // this is basic syntax export k andar setup jis mai baqi kaam hoga

    setup(){
        const { getCompanies,companies } = useCompanies();    // hmien use companies mai s yeh yeh cheezien chaiyen is file mai s 

        // jon hi component mount ho get companies ka function chali  and q k woh whan ref array thi so hmien yhan b accessible
        onMounted(getCompanies)
        return {
            companies
        }
    }
    
}
</script>
<style lang="">
    
</style>