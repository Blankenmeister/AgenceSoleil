"use client";


import "./carteVoyageDetail.css";

export default function CarteVoyageDetail(props) {
  console.log("component ", props); // Bon pour déboguer et voir ce que contiennent les props.

  return (

  <>
  
    <div className="m-5 carteVoyageDetail">
      {props.image && (
        <img
          className="carteImage"
          // width={300}
          // // height={250}
          src={'http://localhost:8000/images/' + props.image} 
          alt={"Image de " + props.nom}
        />
      )}
      
      <div className="m-5 voyageDetailInfo">
        <p className="fs-3 voyageNom">{props.nom}</p>
        <p className="mt-2 fw-bold voyageDestination">Ville : {props.destination}</p>
        <p className="m-0 voyageDateDebut">Du {props.dateDebut}</p>
        <p className="voyageFin">au {props.dateFin}</p>
        <p className="fw-bold voyageLogement">Logement : {props.logement}</p>
        <p className="fw-bold voyagePrix">{props.prix}</p>
        <p className="m-0 voyageCategorie">Catégories : {props.categorie}</p>

        {props.categories && props.categories.map((categorie, index) => (
                                <p key={index}>{categorie.nom}</p>

        ))}
</div>
    </div>
    </>
  );
}