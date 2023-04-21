1. 推荐使用Ubuntu系统。

2. 执行以下命令后部署程序：
'''
sudo apt update && sudo apt install libfontconfig1 libxrender1 && sudo wget https://github.com/wkhtmltopdf/packaging/releases/download/0.12.6-1/wkhtmltox_0.12.6-1.bionic_amd64.deb && sudo dpkg -i wkhtmltox_0.12.6-1.bionic_amd64.deb && sudo apt install -f && sudo apt install pandoc
'''
注意：以上命令使用非root用户执行

3. 若使用宝塔面板请删除php禁用函数"exec"