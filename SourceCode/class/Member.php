<?php
require_once 'config/db.php';

class Member {
    private $db;

    public function __construct() {
        $this->db = (new Database())->conn;
    }

    // Getter functions

    public function getAllMembers() {
        $stmt = $this->db->query("SELECT * FROM members");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMemberById($member_id) {
        $stmt = $this->db->prepare("SELECT * FROM members WHERE id = ?");
        $stmt->execute([$member_id]);

        $result = $stmt->fetch();
        if (isset($result) && $result["id"] == $member_id) {
            return $result;
        }
    }

    // Adder function

    public function addMember($name, $email, $phone) {
        $stmt = $this->db->prepare("INSERT INTO members (name, email, phone) VALUES (?, ?, ?)");
        return $stmt->execute([$name, $email, $phone]);
    }

    // Updater function

    public function updateMember($id, $name, $email, $phone) {
        $stmt = $this->db->prepare("UPDATE members SET name = ?, email = ?, phone = ? WHERE id = ?");
        return $stmt->execute([$name, $email, $phone, $id]);
    }

    // Deleter function

    public function deleteMember($id) {
        $stmt = $this->db->prepare("DELETE FROM members WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>