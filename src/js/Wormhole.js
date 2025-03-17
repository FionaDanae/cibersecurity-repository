/**
 * Wormhole object.
 * Adds wormhole effect to the scene.
 */
(function( name, factory )
{
    if( typeof define === 'function' && define.amd ){ define( [], factory ); } else
    if( typeof exports === 'object' ){ module.exports = factory; } else
    if( window ){ window[ name ] = factory(); }

})( "Wormhole", function()
{
    // class constructor
    var Factory = function()
    {
        this.group    = null;
        this.texture  = null;
        this.ready    = false;
        this.hyper    = false;
        this.ease     = 10;
        this.hype     = {
            normal    : 0.0002, // Reduced for slower animation
            slow      : 0.0002,
            scale     : 1,
            speed     : 5, // Reduced for slower effect
            upRatio   : 1.03, // Reduced for smoother transition
            upScale   : 1.03,
            downRatio : 1.45, // Adjusted for smoother return
            downScale : 1.45,
        };
    };

    // class prototype
    Factory.prototype = {
        constructor: Factory,

        // on setup
        onSetup: function( stage )
        {
            stage.preloadTexture( "wormhole", "dist/images/water.jpg" );
        },

        // create objects
        onInit: function( stage )
        {
            this.createWormhole( stage );
            this.ready = true;
        },

        // on mouse move
        onMouse: function( stage, mouse )
        {
            // this.move.x = -( mouse.x - ( stage.width / 2 ) )  * 0.001;
            // this.move.y =  ( mouse.y - ( stage.height / 2 ) ) * 0.001;
        },

        // update particles
        onFrame: function( stage, now )
        {
            if( this.ready )
            {
                if( this.hyper )
                {
                    this.hype.slow  = ( this.hype.slow >= this.hype.speed ) ? this.hype.speed : this.hype.slow * this.hype.upRatio;
                    this.hype.scale = ( this.hype.scale <= 0.1 ) ? 0.1 : this.hype.scale / this.hype.upScale;

                    this.texture.offset.y -= this.hype.normal * this.hype.slow;
                    this.texture.needsUpdate = true;

                    this.group.scale.set( this.hype.scale, this.hype.scale, 1 );

                    this.group.rotation.x = stage.camera.rotation.x;
                    this.group.rotation.y = stage.camera.rotation.y;
                    this.group.rotation.z = stage.camera.rotation.z;

                    this.group.position.x = stage.camera.position.x;
                    this.group.position.y = stage.camera.position.y;
                    this.group.position.z = stage.camera.position.z;

                    this.group.rotation.z -= 0.008;
                    return;
                }
                this.hype.slow  = ( this.hype.slow <= 1 ) ? 1 : this.hype.slow / this.hype.downRatio;
                this.hype.scale = ( this.hype.scale >= 1 ) ? 1 : this.hype.scale * this.hype.downScale;
            }
        },

        // create wormhole
        createWormhole: function( stage )
        {
            this.group = new THREE.Object3D();
            this.group.position.z = stage.camera.position.z;

            this.texture = stage.getTexture( "wormhole" );
            this.texture.wrapT = THREE.RepeatWrapping;
            this.texture.wrapS = THREE.RepeatWrapping;

            var geometry = new THREE.CylinderGeometry( 100, 0, 300, 40, 40, true );
            var material = new THREE.MeshLambertMaterial({
                color: 0xffffff,
                opacity: 1,
                map: this.texture,
                blending: THREE.AdditiveBlending,
                side: THREE.BackSide,
                transparent: false,
                depthTest: true,
            });

            var color = new THREE.Color();
            color.setHSL( Math.random(), 1, 0.8 );

            var light = new THREE.PointLight( color, 4, 100 );
            light.position.set( 0, 0, 0 );

            var cylinder = new THREE.Mesh( geometry, material );
            cylinder.position.set( 0, 0, 0 );
            cylinder.rotation.x = Math.PI / 2;

            this.group.add( cylinder );
            this.group.add( light );
        },

        // start hyper travel
        hyperStart: function( stage )
        {
            stage.addToScene( this.group );
            this.hyper = true;
        },

        // start hyper travel
        hyperStop: function( stage )
        {
            stage.removeFromScene( this.group );
            this.hyper = false;
        },
    };

    // export
    return Factory;
});
this.hype = {
                normal    : 0.0002, // Reduced for slower animation
                slow      : 0.0002,
                scale     : 1,
                speed     : 5, // Reduced for slower effect
                upRatio   : 1.03, // Reduced for smoother transition
                upScale   : 1.03,
                downRatio : 1.45, // Adjusted for smoother return
                downScale : 1.45,
            };
