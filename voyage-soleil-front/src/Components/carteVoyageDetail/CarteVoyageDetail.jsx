"use client";


import "./carteVoyageDetail.css";

export default function CarteVoyageDetail(props) {
  console.log(props); // Bon pour déboguer et voir ce que contiennent les props.

  return (
    <div className="carteVoyageDetail">
      {props.image && (
        <img
          className="carteImage"
          width={250}
          height={250}
          src={'http://localhost:8000/images/' + props.image} 
          alt={"Image de " + props.nom}
        />
      )}
      <div className="voyageDetailInfo">
        <p className="voyageNom">{props.nom}</p>
        
        
      </div>
    </div>
  );
}