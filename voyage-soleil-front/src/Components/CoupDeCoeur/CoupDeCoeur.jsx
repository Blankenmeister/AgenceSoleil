

export default function CoupDeCoeur(props) {

    return(
        <>
        <h3 className="m-5 titre fw-bold">Nos voyages coups de coeurs</h3>
        <ul>
            {props.voyages && props.voyages.map((voyage, index) => (
            
    
                <Link key={index} href={"/voyages/" + voyage.id}>
                    <li>
                        <p>{voyage.nom}</p>
                        <p>{voyage.dateDebut}</p>
                        <p>{voyage.dateFin}</p>
                        <p>{voyage.destination.nom}</p>
                        <p>{voyage.logement.nom}</p>
                        {
                            voyage.categorie.length >  0 &&  voyage.categorie.map((categorie)=>{
                                return(
                                    <p>{categorie.nom}</p>
                                )
                            })
                        }
                        <p>{voyage.prix}</p>
                    </li>
                </Link>
                
            ))}
        </ul>

        </>
    );
}