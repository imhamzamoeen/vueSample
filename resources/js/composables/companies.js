//? Composable api is like a laravel service class that we can use for reuseability 

import {ref} from 'vue'
import axios from "axios";

// Export default k bad its a standard to name it and it is a function so we write function useCompanies 
export default function useCompanies() {

    // here it will have methods

    const companies = ref([]); // to use it in other files we make it reactive array .. simple array s kaam nhe chalta 

    const getCompanies = async () => {
        // get companies is a function name and it is async mtlb tb tk return nhe kry ga jab tk andar wala kaam pora nah hojai
        let result = await axios.get("api/companies")
        
        companies.value = result.data.data; //assigned resulted array to companies
   
    }

    return {
        companies, // companies k array 
        getCompanies, //function to get all companies 
    } // jo is class s hm n return krwana h 
}
