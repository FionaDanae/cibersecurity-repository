import './bootstrap';
import Aos from 'aos'; //importación de toda la paquetería
import 'aos/dist/aos.css';

//inicializar efecto
Aos.init({
    duration: 1000,
    delay: 200, //antes de la animación existe un retraso
    once: false, //cuántas veces quieres que se repita
});

/**
 * App scripts
 */
(function()
{
    // elements
    var body      = document.body,
        loader    = document.querySelector( ".loader" ),
        content   = document.querySelector( ".content" ),
        error     = document.querySelector( ".error" ),
        share     = document.querySelector( ".share" ),
        stats     = document.querySelector( ".stats" ),
        shareBtns = document.querySelectorAll( "[data-share]" ) || [];

    // setup main stage
    var stage = new Stage( "stage-container", {
        alpha: true,
        antialias: true,
        precision: "mediump"
    });

    // setup share buttons
    for( var i = 0; i < shareBtns.length; i++ )
    {
        shareBtns[ i ].addEventListener( "click", function( e )
        {
            e.preventDefault();

            var service = this.getAttribute( "data-share" ) || "";
            var url     = String( window.location.href || "" );
            var title   = String( document.title || "" );
            var info    = String( document.querySelector( "#description" ).getAttribute( "content" ) || "" );
            var status  = String( info + " | " + url ).replace( /[\r\n\t\s]+/g, " " );

        });
    }

    // Function to handle wormhole effect
    window.initWormhole = function(event) {
        content.classList.remove( "active" );
        stage.triggerEvent( "hyperStart" );

        // Enhance visibility during transition
        stage.move.z = -1500; // Adjusted for better initial position
        stage.look.y = 0.3; // Optimized camera angle
        stage.setFov(70); // Balanced field of view

        // Improve lighting and rendering quality
        stage.setAmbientLight(1.0); // Maximum ambient light
        stage.setDirectionalLight(0.8); // Add directional lighting
        stage.setRenderQuality(1.0); // Maximum render quality
        stage.setBloom(1.5); // Add bloom effect for better visibility

        setTimeout( function()
        {
            content.classList.add( "active" );
            stage.triggerEvent( "hyperStop" );
            window.location.href = '/contacto';
        }, 2500 );
    };

    // zoom in on press
    stage.onEvent( "onPress", function( mouse )
    {
        this.triggerEvent( "zoomIn" );
    });

    // zoom out on release
    stage.onEvent( "onRelease", function( mouse )
    {
        this.triggerEvent( "zoomOut" );
    });

    // move stage camera
    stage.onEvent( "onUp", function( code )
    {
        if( this.move.z > -10000 )
        {
            this.move.z -= 200;
        }
    });

    // move stage camera
    stage.onEvent( "onDown", function( code )
    {
        if( this.move.z < 200 )
        {
            this.move.z += 200;
        }
    });

    // move stage camera
    stage.onEvent( "onLeft", function( code )
    {
        if( this.move.x > -400 )
        {
            this.move.x -= 20;
            this.look.y -= 0.01;
        }
    });

    // move stage camera
    stage.onEvent( "onRight", function( code )
    {
        if( this.move.x < 400 )
        {
            this.move.x += 20;
            this.look.y += 0.01;
        }
    });

    // something went wrong during init or preload
    stage.onEvent( "onError", function( info )
    {
        loader.classList.remove( "active" );
        content.classList.remove( "active" );
        error.classList.add( "active" );
        error.querySelector( ".error-info" ).innerHTML = info;
    });

    // everything loaded successfully
    stage.onEvent( "onInit", function( now )
    {
        loader.classList.remove( "active" );
        error.classList.remove( "active" );
        content.classList.add( "active" );
        share.classList.add( "active" );
        stats.classList.add( "active" );

        setInterval( function() {
            stats.innerHTML = stage.getFps();
        }, 300 );
    });
    /*
    // add objects to stage and init
    stage.addObject( new Nebula() );
    stage.addObject( new Stars() );
    stage.addObject( new Planets() );
    stage.addObject( new Wormhole() );
    stage.init();
    */
})();