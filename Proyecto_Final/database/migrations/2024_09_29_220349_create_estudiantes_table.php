    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('estudiantes', function (Blueprint $table) {
                $table->id();
                $table->string('idEstudiantes'); 
                $table->string('idTesis');
                $table->string("nombre"); //hasta 250 caracteres 
                $table->string("apellidop"); 
                $table->string("apellidon"); 
                $table->string("telefono");
                $table->string("correo"); 
                

                $table->timestamps();

            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('estudiantes');
        }
    };
