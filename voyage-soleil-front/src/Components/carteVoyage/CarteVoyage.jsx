import "./carteVoyage.css";


export default function CarteVoyage(props) {
  return (
    <div className="carteVoyage">
      <div className="carteInfo">
        <p className="carteNom">{props.nom}</p>
        <p className="carteDestination">{props.destination}</p>
      </div>
      {props.image && (
        <img
        className="imageCarte"
        src={'http://localhost:8000/images/' + props.image} 
        width={250}
        height={250}
        alt={"Image of " + props.nom}
      />
      )}
    </div>
  );
}