"use client"

import Link from "next/link";
import CarteVoyage from "../carteVoyage/CarteVoyage";
import "./voyageList.css";

export default function VoyageList(props) {
    return (
      <div>
        {props.voyages && (
          <ul className="voyageList">
            {props.voyages.map((voyage, index) => (
              <Link className="link" key={index} href={"/voyages/" + voyage.id}>
                <li>
                  <CarteVoyage nom={voyage.nom} destination={voyage.destination.nom} imageUrl={voyage.destination.imageUrl} />
                </li>
              </Link>
            ))}
          </ul>
        )}
      </div>
    );
  }



// export default function voyageList(props) {
//     console.log(props.voyages)
//     return (
        
//         <ul>
//             {props.voyages && props.voyages.map((voyage, index) => (
            
    
//                 <Link key={index} href={"/voyages/" + voyage.id}>
//                     <li>
//                         <p>{voyage.nom}</p>
//                         <p>{voyage.dateDebut}</p>
//                         <p>{voyage.dateFin}</p>
//                         <p>{voyage.destination.nom}</p>
//                         <p>{voyage.logement.nom}</p>
//                         {
//                             voyage.categorie.length >  0 &&  voyage.categorie.map((categorie)=>{
//                                 return(
//                                     <p>{
//                                     categorie.nom}</p>
//                                 )
//                             })
//                         }
//                         <p>{voyage.prix}</p>
//                     </li>
//                 </Link>
                
//             ))}
//         </ul>
        



//     );
// }