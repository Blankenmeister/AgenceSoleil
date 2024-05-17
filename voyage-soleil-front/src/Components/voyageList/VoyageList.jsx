"use client"

import Link from "next/link";
import CarteVoyage from "../carteVoyage/CarteVoyage";
import "./voyageList.css";


export default function voyageList(props) {
    console.log(props.voyages)
    return (
        
        <ul className="voyageList">
            {props.voyages && props.voyages.map((voyage, index) => (
                <Link className="text-reset" key={index} href={"/voyages/" + voyage.nom}>
                    <li>
                  <CarteVoyage nom={voyage.nom} destination={voyage.destination.nom} image={voyage.destination.imageUrl} />
                    </li>
                </Link>
            ))}
        </ul>
    );
}

