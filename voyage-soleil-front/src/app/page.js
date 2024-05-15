"use client"

import Navbar from "@/Components/Navbar/Navbar";
import Footer from '@/Components/Footer/Footer';
import HomeImage from '@/Components/HomeImage/HomeImage';
import CoupDeCoeur from "@/Components/CoupDeCoeur/CoupDeCoeur";
import { Collapse } from "react-bootstrap";



export default function Home() {
  return (
    <>
    <Navbar />
    <HomeImage />
    <CoupDeCoeur />
    <Footer />  
    </>
  );
}
