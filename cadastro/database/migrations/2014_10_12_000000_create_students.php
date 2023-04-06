use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
public function up()
{
Schema::create('students', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->string('cpf')->unique();
$table->date('birthdate');
$table->string('email')->unique();
$table->string('phone');
$table->timestamps();
$table->softDeletes();
});
}

public function down()
{
Schema::dropIfExists('students');
}
}
