///////////////////////////////////////////////////////////////////////////////
//
// 
//
//////////////////////////////////////////////////////////////////////////////

var p2 = require('p2');

  export  function placePortal( portal: any, share: any) {
   // console.log('place');
    const circleShape = new p2.Circle({ radius: 10 });
    circleShape.collisionGroup = share.COL_ENEMY;
    circleShape.collisionMask = share.COL_PLAYER;
    // Create a typical dynamic body
    const circleBody = new p2.Body({
      mass: 1,
      position: [portal.field_x_value, portal.field_y_value],
      destination_x: portal.field_destination_x_value,
      destination_y: portal.field_destination_y_value,


      angle: 0,
      type: p2.Body.DYNAMIC,
      collisionResponse: true,
      velocity: [0, 0],
      angularVelocity: 0
    });
    circleBody.destination = portal.field_destination_target_id;
    circleBody.tiled = portal.field_tiled_value;

   // console.log(' position:', circleBody.position);
    circleBody.isPortal = true;
    circleBody.sensor = true;
    circleBody.motionState = 2; //STATIC
    // Add a circular shape to the body
    circleBody.addShape(circleShape);
    //this.circleBody.onBeginContact.add(this.checkHits(), this);
    // Add the body to the world
    return circleBody
  }



