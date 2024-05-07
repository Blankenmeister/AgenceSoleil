import "./carteVoyage.css";
import Image from "next/image";

export default function CarteVoyage(props) {
  return (
    <div className="carteVoyage">
      <div className="carteInfo">
        <p className="carteNom">{props.nom}</p>
        <p className="carteDestination">{props.destination}</p>
      </div>
      {props.imageUrl && (
        <img
        className="imageCarte"
        src={'http://localhost:8000/images/' + props.imageUrl} 
        width={250}
        height={250}
        alt={"Image of " + props.nom}
      />
      )}
    </div>
  );
}