import "./carteVoyageDetail.css";

export default function CarteVoyageDetail(props) {
  return (
    <div className="character-card">
      {props.image && (
        <img
          className="character-card-image"
          width={250}
          height={250}
          src={'http://localhost:8000/images/' + props.imageUrl} 
          alt={"Image de " + props.nom}
        />
      )}
      <div className="character-card-information">
        <p className="character-card-name">{props.nom}</p>
        <p className="character-card-species">
          {props.species} - {props.gender}
        </p>
      </div>
    </div>
  );
}