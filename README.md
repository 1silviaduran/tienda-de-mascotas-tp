# Tienda de Mascotas - Mockups y Diseño UX/UI (Figma)

En este repositorio se encuentra la documentación y los mockups del sitio web de nuestra tienda de alimentos y accesorios para mascotas.

## 🔗 Enlace a Figma
Puedes revisar el diseño interactivo completo en el siguiente enlace oficial:
👉 [Ver proyecto en Figma](https://www.figma.com/design/FMnXaOoimKxyIjWbEKqqRA/Sin-t%C3%ADtulo?node-id=0-1&t=56gyK8ADZePRQgGf-1)

---

## 🖼️ Vistas Previas del Diseño (Mockups)

![Mockup Principal](./Imagen%20de%20WhatsApp%202026-11-04%20at%2017.40.49.jpeg)

---

##  TP5: Procesamiento de Formularios y Seguridad Web

En esta etapa se implementó la lógica del lado del servidor en PHP para la captura segura de datos, cumpliendo con los estándares de seguridad frente al OWASP Top 10 (Prevención de ataques XSS).

###  Componentes Desarrollados:
1. **Formulario por POST (`contacto-procesar.php`):**
   * Diseñado para el módulo de contacto y altas de información.
   * Incluye validación de campos vacíos en el servidor (`empty`, `isset`) y validación de formato estricto de correo electrónico (`filter_var`)[cite: 3].
   * Implementa **persistencia de datos** (los campos completados se conservan si ocurre un error de validación)[cite: 3].

2. **Formulario por GET (`buscar.php`):**
   * Diseñado para módulos de búsqueda y filtrado rápido de productos en el catálogo[cite: 3].

3. **Seguridad y Sanitización (XSS):**
   * Uso de funciones nativas de PHP como `htmlspecialchars(..., ENT_QUOTES, 'UTF-8')` y `trim()` para neutralizar cualquier script malicioso antes de renderizar los datos en pantalla[cite: 3].

###  Capturas de Pantalla
*(Aquí debes colocar tus capturas de pantalla donde se observe el formulario funcionando, los mensajes de error/éxito y el buscador)*