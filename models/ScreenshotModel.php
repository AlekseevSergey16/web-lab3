<?php

include_once "DbModel.php";

class ScreenshotModel extends DbModel
{
    private int $pageSize = 12;

    function getFirstScreenshots(): array|false
    {
        $sql = <<< END
                SELECT id, uuid, sblob, upload_date
                FROM screenshots
                ORDER BY id DESC
                LIMIT ?
        END;
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(1, $this->pageSize, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    function getScreenshotByUUID(string $uuid)
    {
        $sql = <<< END
            SELECT description, upload_date, sblob, login, uuid
            FROM screenshots s
            LEFT JOIN users ON s.user_id = users.id
            WHERE uuid = ?
        END;
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(1, $uuid);
        $sth->execute();
        return $sth->fetch(PDO::FETCH_ASSOC);
    }

    function getScreenshotsByOffset($offset): array
    {
        $sql = <<< END
            SELECT s.id, uuid, sblob, upload_date, description, login
            FROM screenshots s
                LEFT JOIN users u ON s.user_id = u.id
            WHERE s.id < ?
            ORDER BY s.id DESC
            LIMIT ?;
        END;
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(1, $offset, PDO::PARAM_INT);
        $sth->bindValue(2, $this->pageSize, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param int $pageSize
     * размер страницы при выводе
     * Другими словами велечина limit в sql-запросе на выборку
     */
    public function setPageSize(int $pageSize): void
    {
        $this->pageSize = $pageSize;
    }
}