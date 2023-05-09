import React, {useState, useEffect} from 'react';
import { Link, useParams } from "react-router-dom";
import projetService from '../services/projet.service';
import moment from 'moment';

function ShowProduit() {
    // eslint-disable-next-line react-hooks/rules-of-hooks
    const [id, setId] = useState(useParams().id)
    const [produit, setProduit] = useState({nom:"", code:"", prix_achat:"",prix_vente:"",date_fabrication:"",date_peremtion:"",category:"", fournisseur:""})
    useEffect(() => {
        projetService.showProduit(id)
        .then(function (response) {
          setProduit(response.data)
        })
        .catch(function (error) {
          console.log(error);
        })
    }, [])
    return (
           <div className="container">
            <h2 className="text-center mt-5 mb-3">View Product</h2>
                <div className="card">
                    <div className="card-header">
                        <Link 
                            className="btn btn-info float-left"
                            to="/produit"> Back To Produit List
                        </Link>
                    </div>
                    <div className="card-body">
                        <b className="text-muted">Name:</b>
                        <p>{produit.nom}</p>
                        <b className="text-muted">Code:</b>
                        <p>{produit.code}</p>
                        <b className="text-muted">Prix d'achat:</b>
                        <p>{produit.prix_achat}</p>
                        <b className="text-muted">Prix de vente:</b>
                        <p>{produit.prix_vente}</p>
                        <b className="text-muted">Date de Fabrication:</b>
                        <p>{moment(produit.date_fabrication.date).format('DD-MM-YYYY')}</p>
                        <b className="text-muted">Date de péremtion:</b>
                        <p>{moment(produit.date_peremtion.date).format('DD-MM-YYYY')}</p>
                        <b className="text-muted">Catégorie:</b>
                        <p>{produit.categorie}</p>
                        <b className="text-muted">Fournisseur:</b>
                        <p>{produit.fournisseur}</p>
                    </div>
                </div>
            </div>
    );
}
export default ShowProduit;