import { StrictMode } from "react";
import { createRoot } from "react-dom/client";
import "../css/demo.css";
import Demo from "./Demo";

createRoot(document.getElementById("app")!).render(
    <StrictMode>
        <Demo />
    </StrictMode>,
);
