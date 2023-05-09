import React, { useState, useEffect } from "react";
import { Link, useNavigate } from "react-router-dom";
import Swal from "sweetalert2";
import projetService from "../services/projet.service";


function AddProduit() {
  const [fourni, setFourns] = useState([]);
  const [cats, setCats] = useState([]);

  useEffect(() => {
    projetService.getCategorie().then((response) => setCats(response.data)).catch(error => {
        console.log(error);
      });
      projetService.getFournisseur().then((response) => setFourns(response.data)).catch(error => {
        console.log(error);
      });
  }, []);

  const [nom, setNom] = useState("");
  const [code, setCode] = useState("");
  const [prix_achat, setPrixAchat] = useState("");
  const [prix_vente, setPrixVente] = useState("");
  const [date_fabrication, setDateFabrication] = useState("");
  const [date_peremtion, setDatePeremtion] = useState("");
  const [categorie, setCategorie] = useState("");
  const [fournisseur, setFournisseur] = useState("");
  const [isSaving, setIsSaving] = useState(false);
  const navigate = useNavigate();

  const saveRecord = () => {
    setIsSaving(true);
    let formData = new FormData();
    formData.append("nom", nom);
    formData.append("code", code);
    formData.append("prix_vente", prix_vente);
    formData.append("prix_achat", prix_achat);
    formData.append("date_fabrication", date_fabrication);
    formData.append("date_peremtion", code);
    formData.append("fournisseur", fournisseur);
    formData.append("categorie", categorie);
    if (
      nom == "" ||
      code == "" ||
      prix_achat == "" ||
      prix_vente == "" ||
      date_fabrication == "" ||
      date_peremtion == ""
    ) {
      Swal.fire({
        icon: "error",
        title: "Name, code are required fields.",
        showConfirmButton: true,
        showCloseButton: true,
      });
      setIsSaving(false);
    } else {
        console.log("formData", formData);
      projetService
        .AddProduit(formData)
        .then(function (response) {
          Swal.fire({
            icon: "success",
            title: "Product has been added successfully!",
            showConfirmButton: true,
          });
          setIsSaving(false);
          setNom("");
          setCode("");
          setPrixAchat("");
          setPrixVente("");
          setDateFabrication("");
          setDatePeremtion("");
          navigate('/produit')
        })
        .catch(function (error) {
          Swal.fire({
            icon: "error",
            title: "Oops, Something went wrong!",
            showConfirmButton: true,
          });
          setIsSaving(false);
        });
    }
  };
  return (
    <div className="container">
      <h2 className="text-center mt-5 mb-3">Add Produit</h2>
      <div className="card">
        <div className="card-header">
          <Link className="btn btn-info float-left" to="/">
            Back To Projet List
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
                required
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
                required
              />
            </div>
            <div className="form-group">
              <label htmlFor="prix_achat">Prix d'Achat</label>
              <input
                onChange={(event) => {
                  setPrixAchat(event.target.value);
                }}
                value={prix_achat}
                type="text"
                className="form-control"
                id="prix_achat"
                name="prix_achat"
                required
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
                required
              />
            </div>
            <div className="form-group">
              <label htmlFor="date_fabrication">Date de Fabrication</label>
              <input
                onChange={(event) => {
                  setDateFabrication(event.target.value);
                }}
                value={date_fabrication}
                type="datetime-local"
                className="form-control"
                id="date_fabrication"
                name="date_fabrication"
                required
              />
            </div>
            <div className="form-group">
              <label htmlFor="date_peremtion">Date Péremtion</label>
              <input
                onChange={(event) => {
                  setDatePeremtion(event.target.value);
                }}
                value={date_peremtion}
                type="datetime-local"
                className="form-control"
                id="date_peremtion"
                name="date_peremtion"
                required
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
                {cats.map(category => {
                  return <option key={category.id } value={category.id}>{category.nom}</option>
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
                {fourni.map(f1 => {
                  return <option key={f1.id } value={f1.id}> {f1.nom}</option>
                })}
              </select>
            </div>
            <button
              disabled={isSaving}
              onClick={saveRecord}
              type="button"
              className="btn btn-primary mt-3"
            >
              Save
            </button>
          </form>
        </div>
      </div>
    </div>
  );
}
export default AddProduit;
