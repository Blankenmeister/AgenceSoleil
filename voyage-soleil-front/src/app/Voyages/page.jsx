"use client";

import 'bootstrap/dist/css/bootstrap.min.css';
import Navbar from "@/Components/Navbar/Navbar";
import "./page.css";
import VoyageList from "@/Components/voyageList/VoyageList";
import { useEffect, useState } from "react";
import Footer from "@/Components/Footer/Footer";

export default function Voyages() {
  const [loading, setLoading] = useState(true); 
  const [error, setError] = useState(false); 
  const [data, setData] = useState(null); 

  useEffect(() => {
    try {
      fetch("http://127.0.0.1:8000/api/voyages")
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
      {loading && !error && <div>Données en cours de Chargement !</div>}
      {!loading && !error && data && 
      <>
      <Navbar />
      <h3 className='m-5 text-uppercase fw-bold'>Découvrez nos voyages</h3>
      <VoyageList voyages={data} />
      <Footer />
      </>
      }
      {!loading && error && <div>Une erreur est survenue</div>}
    </main>
  );
}
