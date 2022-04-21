# Миграция проектов с GitHub на GitLab

1. Через веб-интерфейс GitLab импортировать существующий проект с GitHub
2. Склонировать репозиторий к себе на компьютер (уже с GitLab):
    ```
    git clone https://gitlab.com/phereo/project_name.git
    ```
3. Создать локальную ветку и закрепить ее за удаленной (чтобы можно было делать pull / push):
    ```
    git checkout --track -b branch_name origin/branch_name
    ```