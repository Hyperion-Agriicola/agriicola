$(document).ready(function () {
    var tour = new Tour({
        steps: [
            {
                element: "#imageBrand",
                title: "Bienvenido a Agriicola",
                content: "Comencemos con un pequeño tutorial de uso, este es tu panel de control"
            },
            {
                element: "#showNews",
                title: "Mira las noticias",
                content: "En esta sección recibe las últimas noticias y recomendaciones respecto a tus cultivos"
            },
            {
                element: "#askForHelp",
                title: "¿Necesitas ayuda extra?",
                content: "Aquí puedes ver todos los vídeo tutoriales, preguntas frecuentes y un panel de mensajes para contacto directo"
            },
            {
                element: "#editProfile",
                title: "Modifica tus datos",
                content: "Si presionas aquí podrás acceder a la modificación de los datos que ingresaste en tu registro previo"
            },
            {
                element: "#showHistory",
                title: "Revisa tu historial",
                content: "¿Tienes cultivos deshabilitados? Aún puedes revisarlos entrando en esta sección"
            },
            {
                element: "#showOncost",
                title: "Controla tus gastos",
                content: "Aquí puedes hacer un registro y seguimiento de todos tus gatos, ¡Tú decides como los creas!"
            },
            {
                element: "#myCrops",
                title: "Revisa tus cultivvos",
                content: "En esta sección aparecen todos tus cultivos, da click en ver más para poder visualizar toda la información"
            },
            {
                element: "#addNewCrop",
                title: "Crea tus cultivos",
                content: "Para agregar un nuevo cultivo presiona en este botón <br> ¿Te parece si comenzamos por aquí?"
            },
            {
                element: "#addNewSpend",
                title: "Crea un nuevo gasto",
                content: "Presiona aquí para agregar un nuevo gasto general"
            }
        ],
        template: "<div class='popover tour'>" +
            " <div class= 'arrow' ></div> " +
            " <h3 class='popover-title'></h3> " +
            " <div class='popover-content'></div> " +
            " <div class='popover-navigation'> " +
            " <button class='btn btn-default' data-role='prev'>« Anterior</button> " +
            " <span data-role='separator'>|</span> " +
            " <button class='btn btn-default' data-role='next'>Siguiente »</button> " +
            " </div> " +
            " </div > "
    });
    tour.init();
    tour.start();
});