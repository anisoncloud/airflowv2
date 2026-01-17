"use client";
import { useEffect } from 'react';

export default function BootstrapClient() {
  useEffect(() => {
    // Dynamically import bootstrap JS on the client side
    import('bootstrap/dist/js/bootstrap.bundle.js');
  }, []);

  return null; // This component doesn't render anything itself
}