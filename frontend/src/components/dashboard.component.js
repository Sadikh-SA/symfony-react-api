import React, { Component } from "react";
import { Navigate, Link } from "react-router-dom";
import AuthService from "../services/auth.service";
import projetService from "../services/projet.service";
import moment from 'moment'
import Swal from "sweetalert2";

export default class Dashboard extends Component {
  constructor(props) {
    super(props);

    this.state = {
      redirect: null,
      userReady: false,
      currentUser: { username: "" },
      products: null
    };
  }


  componentDidMount() {
    const currentUser = AuthService.getCurrentUser();
    console.log("CurrentUser",currentUser);

    if (!currentUser) this.setState({ redirect: "/" });
    projetService.getProduit().then(
      response => this.setState({ currentUser: currentUser, userReady: true, products: response.data})
      )
    .catch(error => console.log(error));
  }

  deleteRecord(id) {
    Swal.fire({
      title: 'Are you sure you want to delete this employee?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes'
    }).then((result) => {
      if (result.isConfirmed) {
          projetService.deleteProduit(id)
          .then(function (response) {
              Swal.fire({
                  icon: 'success',
                  title: 'Produit has been deleted successfully!',
                  showConfirmButton: false,
                  timer: 1000
              })
              this.componentDidMount()
          })
          .catch(function (error) {
              Swal.fire({
                  icon: 'error',
                  title: 'Oops, Something went wrong!',
                  showConfirmButton: false,
                  timer: 1000
              })
          });
      }
    })
  }

  render() {
    if (this.state.redirect) {
      return <Navigate to={this.state.redirect} />
    }

    const { currentUser } = this.state;
    const { products } = this.state;

    console.log("vsgdhj", {products}.products);

    return (
      <div className="container">
        {(this.state.userReady) ?
        <div>
            <header className="jumbotron">
            <div className="card-header">
                        <Link 
                            className="btn btn-primary"
                            to="/addProduit">Add Produit
                        </Link>
                    </div>
            </header>
            <table className="mt-2 table table-striped table-hover table-bordered border-primary">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>prix d'achat</th>
                                    <th>prix de vente</th>
                                    <th>date de fabrication</th>
                                    <th>date de peremtion</th>
                                    <th>categorie</th>
                                    <th>fournisseur</th>
                                    <th width="250px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{products}.products.map((Projet, key)=>{
                                    return (
                                        <tr key={key}>
                                            <td>{Projet.nom}</td>
                                            <td>{Projet.code}</td>
                                            <td>{Projet.prix_achat}</td>
                                            <td>{Projet.prix_vente}</td>
                                            <td>{moment(Projet.date_fabrication.date).format('DD-MM-YYYY')}</td>
                                            <td>{moment(Projet.date_peremtion.date).format('DD-MM-YYYY')}</td>
                                            <td>{Projet.category}</td>
                                            <td>{Projet.fournisseur}</td>
                                            <td>
                                                <Link
                                                    to={`/showProduit/${Projet.id}`}
                                                    className="btn btn-info mx-1">
                                                    View
                                                </Link>
                                                <Link
                                                    className="btn btn-success mx-1"
                                                    to={`/editProduit/${Projet.id}`}>
                                                    Edit
                                                </Link>
                                                <button 
                                                    onClick={()=>this.deleteRecord(Projet.id)}
                                                    className="btn btn-danger mx-1">
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                    )
                                })}
                            </tbody>
                        </table>
        </div>: null}
      </div>
    );
  }
}