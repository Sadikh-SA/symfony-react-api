import axios from 'axios';
import authHeader from './auth-header';

const API_URL = 'http://localhost:8000/api/projet/';

class ProjetService {
  getCategorie() {
    return axios.get(API_URL + 'category', { headers: authHeader() });
  }

  getFournisseur() {
    return axios.get(API_URL + 'fournisseur', { headers: authHeader() });
  }

  getProduit() {
    return axios.get(API_URL + 'produit', { headers: authHeader() });
  }

  showProduit(id) {
    return axios.get(API_URL + `produit/${id}`, { headers: authHeader() });
  }

  deleteProduit(id) {
    return axios.delete(API_URL + `produit/${id}`, { headers: authHeader() });
  }

  AddProduit(data) {
    return axios.post(API_URL + 'produit', data , { headers: authHeader() });
  }

  editProduit(id, data) {
    return axios.patch(API_URL + `produit/${id}`, data,  { headers: authHeader() });
  }

}

export default new ProjetService();