use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
public function up()
{
Schema::create('classes', function (Blueprint $table) {
$table->id();
$table->integer('school_year');
$table->enum('period', ['morning', 'afternoon', 'evening']);
$table->string('course');
$table->string('room');
$table->timestamps();
$table->softDeletes();
$table->unique(['school_year', 'period', 'course', 'room'], 'unique_class');
});
}

public function down()
{
Schema::dropIfExists('classes');
}
}
