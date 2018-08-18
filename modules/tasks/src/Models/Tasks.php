<?php 

namespace Gerenciador\Tasks\Models;

use Gerenciador\Model;
use App\Models\Utils\UserFilterTrait;

class Tasks extends Model
{
    use UserFilterTrait;

    public function getByProjectId($id)
    {
        $sql = 'SELECT tasks.* FROM tasks
            LEFT JOIN sections ON tasks.section_id = sections.id
            WHERE sections.project_id=? AND tasks.user_id=?';

        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id, $this->user_id]);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function create(array $data)
    {
        $data['user_id'] = $this->user_id;
        $data['assigned_to'] = $this->user_id;
        return parent::create($data);
    }
}