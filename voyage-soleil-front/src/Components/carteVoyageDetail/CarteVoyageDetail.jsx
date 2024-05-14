"use client";


import "./carteVoyageDetail.css";

export default function CarteVoyageDetail(props) {
  console.log("component ", props); // Bon pour déboguer et voir ce que contiennent les props.

  return (

  <>
  
    <div className="mt-5 mb-5 carteVoyageDetail">
      {props.image && (
        <img
          className="carteImage"
          width={300}
          // height={250}
          src={'http://localhost:8000/images/' + props.image} 
          alt={"Image de " + props.nom}
        />
      )}
      <div className="voyageDetailInfo">
        <p className="fs-2 voyageNom">{props.nom}</p>
        <p className="mt-2 fw-bold voyageDestination">Ville : {props.destination}</p>
        <p className="m-0 voyageDateDebut">Du {props.dateDebut}</p>
        <p className="voyageFin">au {props.dateFin}</p>
        <p className="fw-bold voyageLogement">Logement : {props.logement}</p>
        <p className="fw-bold voyagePrix">{props.prix}</p>
        <p className="voyageCategorie">Catégories : {props.categorie}</p>
        {/* {props.categorie && props.categorie.map((cat)=>{return(<p>{cat.nom}</p>)})} */}
      </div>
    </div>
    </>
  );
}