"use client";

import Footer from '@/Components/Footer/Footer';
import FormContact from '@/Components/FormContact/FormContact';
import Navbar from '@/Components/Navbar/Navbar';
import 'bootstrap/dist/css/bootstrap.min.css';


export default function Contact() {
    return(
        <>
        <Navbar />
        <FormContact />
        <Footer />
        </>
    );

}