namespace classPersona
{

    export class Persona
    {
        private _nombre : string;
        private _apellido : string;
        private _edad : number;

        constructor(nombre : string, apellido : string, edad : number)
        {
            this._nombre = nombre; 
            this._edad = edad;
            this._edad = edad;
        }

        public ToString() : string
        {
            return this._nombre+ " - "+this._apellido+ " - " + this._edad.toString;
        }

    }

    export class Alumno extends Persona 
    {
        
        private _legajo : number;

        constructor(nombre : string, apellido : string, edad : number, legajo : number)
        {
            super(nombre, apellido, edad);
            this._legajo = legajo;
        }
        

        public ToString() : string
        {
            return super.ToString + " - " + this._legajo;
        }
        

        public static GuardarEnArchivo()

    }

}