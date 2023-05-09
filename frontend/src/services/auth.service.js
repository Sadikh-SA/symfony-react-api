import axios from "axios";

const API_URL = "http://localhost:8000/api/";

class AuthService {
  login(username, password) {
    return axios
      .post(API_URL + "login_check", {
        username,
        password
      })
      .then(response => {
        if (response.data.token) {
          localStorage.setItem("user", response.data.token);
          localStorage.setItem("login", username)
        }

        return response.data;
      });
  }

  logout() {
    localStorage.removeItem("user");
    localStorage.removeItem("login");
  }

  register(username, nom, prenom, password, adresse, telephone, role) {
    return axios.post(API_URL + "register", {
      username,
      nom,
      prenom,
      adresse,
      password,
      telephone,
      role
    });
  }

  getCurrentUser() {
    return localStorage.getItem('user');;
  }
}

export default new AuthService();