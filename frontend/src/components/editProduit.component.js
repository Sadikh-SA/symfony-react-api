import React, { useState, useEffect } from "react";
import { Link, useParams } from "react-router-dom";
import Swal from "sweetalert2";
import projetService from "../services/projet.service";
function EditProduit() {
  const [fourni, setFourns] = useState([]);
  const [cats, setCats] = useState([]);
  const [id, setId] = useState(useParams().id);
  const [nom, setNom] = useState("");
  const [code, setCode] = useState("");
  const [prix_achat, setPrixAchat] = useState("");
  const [prix_vente, setPrixVente] = useState("");
  const [date_fabrication, setDateFabrication] = useState("");
  const [date_peremtion, setDatePeremtion] = useState("");
  const [categorie, setCategorie] = useState("");
  const [fournisseur, setFournisseur] = useState("");
  const [isSaving, setIsSaving] = useState(false);
  useEffect(() => {
    projetService
      .showProduit(id)
      .then(function (response) {
        setNom(response.data.nom)
        setCode(response.data.code)
        setPrixAchat(response.data.prix_achat)
        setPrixVente(response.data.prix_vente)
        setDateFabrication(response.data.date_fabrication)
        setDatePeremtion(response.data.date_peremtion)
        setCategorie(response.data.categorie)
        setFournisseur(response.data.fournisseur)
        console.log("dhh",response)
      })
      .catch(function (error) {
        Swal.fire({
          icon: "error",
          title: "Oops, Something went wrong!",
          showConfirmButton: true,
        });
      });
    projetService
      .getCategorie()
      .then((response) => setCats(response.data))
      .catch((error) => {
        console.log(error);
      });
    projetService
      .getFournisseur()
      .then((response) => setFourns(response.data))
      .catch((error) => {
        console.log(error);
      });
  }, []);
  
  const saveRecord = () => {
    setIsSaving(true);
    let formData = new URLSearchParams();
    console.log("date_peremtion", date_peremtion);
    formData.append("nom", nom);
    formData.append("code", code);
    formData.append("prix_vente", prix_vente);
    formData.append("prix_achat", prix_achat);
    formData.append("date_fabrication", date_fabrication.date+'00Z');
    formData.append("date_peremtion", date_peremtion.date+'00Z');
    formData.append("fournisseur", fournisseur);
    formData.append("categorie", categorie);
    projetService
      .editProduit(id, formData)
      .then(function (response) {
        Swal.fire({
          icon: "success",
          title: "Product updated successfully!",
          showConfirmButton: true,
        });
        setIsSaving(false);
      })
      .catch(function (error) {
        Swal.fire({
          icon: "error",
          title: "Oops, Something went wrong!",
          showConfirmButton: true,
        });
        setIsSaving(false);
      });
  };
  return (
    <div className="container">
      <h2 className="text-center mt-5 mb-3">Edit Product</h2>
      <div className="card">
        <div className="card-header">
          <Link className="btn btn-info float-left" to="/produit">
            Back To Product List
          </Link>
        </div>
        <div className="card-body">
          <form>
            <div className="form-group">
              <label htmlFor="nom">Nom</label>
              <input
                onChange={(event) => {
                  setNom(event.target.value);
                }}
                value={nom}
                type="text"
                className="form-control"
                id="nom"
                name="nom"
              />
            </div>
            <div className="form-group">
              <label htmlFor="code">Code</label>
              <input
                onChange={(event) => {
                  setCode(event.target.value);
                }}
                value={code}
                type="text"
                className="form-control"
                id="code"
                name="code"
              />
            </div>
            <div className="form-group">
              <label htmlFor="prix_achat">Prix d'achat</label>
              <input
                onChange={(event) => {
                  setPrixAchat(event.target.value);
                }}
                value={prix_achat}
                type="text"
                className="form-control"
                id="prix_achat"
                name="prix_achat"
              />
            </div>
            <div className="form-group">
              <label htmlFor="prix_vente">Prix de Vente</label>
              <input
                onChange={(event) => {
                  setPrixVente(event.target.value);
                }}
                value={prix_vente}
                type="text"
                className="form-control"
                id="prix_vente"
                name="prix_vente"
              />
            </div>
            <div className="form-group">
              <label htmlFor="date_fabrication">Date de Fabrication</label>
              <input
                onChange={(event) => {
                  setDateFabrication(event.target.value);
                }}
                value={(date_fabrication.date || '').toString().substring(0, 16)}
                type="datetime-local"
                className="form-control"
                id="date_fabrication"
                name="date_fabrication"
              />
            </div>
            <div className="form-group">
              <label htmlFor="date_peremtion">Date de Péremtion</label>
              <input
                onChange={(event) => {
                  setDatePeremtion(event.target.value);
                }}
                value={(date_peremtion.date || '').toString().substring(0, 16)}
                type="datetime-local"
                className="form-control"
                id="date_peremtion"
                name="date_peremtion"
              />
            </div>
            <div className="form-group">
              <label htmlFor="categorie">Catégorie</label>
              <select
                className="form-control"
                value={categorie}
                onChange={(event) => {
                  setCategorie(event.target.value);
                }}
              >
                {cats.map((category) => {
                  return (
                    <option key={category.id} value={category.id}>
                      {category.nom}
                    </option>
                  );
                })}
              </select>
            </div>
            <div className="form-group">
              <label htmlFor="fournisseur">Fournisseur</label>
              <select
                className="form-control"
                value={fournisseur}
                onChange={(event) => {
                  setFournisseur(event.target.value);
                }}
              >
                {fourni.map((f1) => {
                  return (
                    <option key={f1.id} value={f1.id}>
                      {" "}
                      {f1.nom}
                    </option>
                  );
                })}
              </select>
            </div>
            <button
              disabled={isSaving}
              onClick={saveRecord}
              type="button"
              className="btn btn-success mt-3"
            >
              Save
            </button>
          </form>
        </div>
      </div>
    </div>
  );
}
export default EditProduit;
