import Link from "next/link";

export default function voyageList(props) {
    // console.log(props.data)
    return (
        <ul>
            {props.voyages.map((voyage, index) => (
                <Link key={index} href={"/voyages/" + voyage.id}>
                    <li>
                        <p>{voyage.nom}</p>
                        <p>{voyage.dateDebut}</p>
                        <p>{voyage.dateFin}</p>
                        <p>{voyage.destination}</p>
                        <p>{voyage.logement}</p>
                        <p>{voyage.categorie}</p>
                        <p>{voyage.prix}</p>
                    </li>
                </Link>
            ))}
        </ul>



    );
}