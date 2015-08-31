function Point(x, y, doFloor){
    this.setPoint(x, y, doFloor);
}

Point.prototype = {
    getX: function(doFloor){
        return doFloor ? floor(this.x) : this.x;
    },

    getY: function(doFloor){
        return doFloor ? floor(this.y) : this.y;
    },

    setPoint: function(x, y, doFloor){
        if(x instanceof Point){
            doFloor = y;

            y = x.getY();
            x = x.getX();
        }

        this.x = doFloor ? floor(x) : x;
        this.y = doFloor ? floor(y) : y;
    },

    add: function(xAmount, yAmount, doFloor){
        this.setPoint(this.getX(doFloor) + xAmount, this.getY(doFloor) + yAmount, doFloor);
    },

    toArray: function(doFloor){
        return [this.getX(doFloor), this.getY(doFloor)];
    },

    toString: function(doFloor){
        return "Point(" + this.toArray(doFloor).join(", ") + ")";
    },

    equals: function(point, doFloor){
        return this.getX(doFloor) === point.getX(doFloor) && this.getY(doFloor) === point.getY(doFloor);
    },

    distance: function(point, doFloor){
        return Math.sqrt(Math.pow(this.getX(doFloor) - point.getX(doFloor), 2) + Math.pow(this.getY(doFloor) - point.getY(doFloor), 2));
    }
};
