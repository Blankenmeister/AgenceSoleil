"use client";

import Footer from "@/Components/Footer/Footer";
import FormReservation from "@/Components/FormReservation/FormReservation";
import Navbar from "@/Components/Navbar/Navbar";
import CarteVoyageDetail from "@/Components/carteVoyageDetail/CarteVoyageDetail";
import { useEffect, useState } from "react";


export default function VoyageDetail(props) {
 
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(false); 
  const [data, setData] = useState(null); 

  useEffect(() => {
    try {
      fetch(
        "http://127.0.0.1:8000/api/voyage/" + props.params.voyageNom
      )
        .then((response) => response.json()) 
        .then((data) => {
          setLoading(false);
          setData(data); 
        });
    } catch (error) {
      setError(true); 
      setLoading(false); 
    }
  }, []);

  return (
    <main>
      <Navbar />
      {loading && !error && <div>Données en cours de chargement !</div>}
      {!loading && !error && data && (
        <>
        <CarteVoyageDetail
          nom={data.nom}
          logement={data.logement.nom}
          prix={data.prix}
          destination={data.destination.nom}
          image={data.destination.imageUrl}
          dateDebut={data.dateDebut}
          dateFin={data.dateFin}
          categories={data.categorie}
        />
        <FormReservation data={data} voyageId={data.id}/>
        <Footer />
        </>
      )}
      {!loading && error && <div>Une erreur est survenue</div>}
    </main>
  );
}