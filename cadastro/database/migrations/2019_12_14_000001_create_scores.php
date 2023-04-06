use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
public function up()
{
Schema::create('scores', function (Blueprint $table) {
$table->id();
$table->unsignedBigInteger('student_id');
$table->unsignedBigInteger('class_id');
$table->string('discipline');
$table->decimal('score', 5, 2);
$table->timestamps();

$table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
$table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
$table->unique(['student_id', 'class_id', 'discipline'], 'unique_score');
});
}

public function down()
{
Schema::dropIfExists('scores');
}
}
