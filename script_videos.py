import os
import glob
import random

VIDEO_IDS = ['xiontlWsNqc', '72E8cJJ_N3M', 'Np8WZ-lMABM', 'gS0l7sEYGZc', '29PwDvlOmjw', 'BPEQU0FBDa0', '4wTbLzvuU04', 'FQRJuQMz71s', 'U2PzzW2FsBg', 'Dmlcg2f1zFA', 'yk2nMAuPLfE', 'FGNrK7bE2O0', 'v8DsxaPh0Kc', 'jetN5t2gNeo', 'G7v2NLfc30w', 'flMqRDafJFE', '9vu41S0egho', 'EpL5nt83EWs', 'Bx1eO-Zd594', 'JA4Yltzi3Ds']

def add_video_to_page(filepath, video_url):
    if not os.path.exists(filepath):
        return

    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()

    if "youtube.com/embed" in content:
        return

    iframe_code = f'''
    <div style="margin-top: 30px; margin-bottom: 30px; text-align: center;">
        <h3>Learn More From Our Expert</h3>
        <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%;">
            <iframe src="{video_url}" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    '''

    if '</article>' in content:
        content = content.replace('</article>', iframe_code + '\n</article>')
    elif '<?php include' in content and 'footer' in content:
        parts = content.split('<?php include')
        if len(parts) > 1:
            for i in range(len(parts)-1, 0, -1):
                if 'footer' in parts[i]:
                    parts[i] = iframe_code + '\n<?php include' + parts[i]
                    content = '<?php include'.join(parts)
                    break
    else:
        content = content.replace('</body>', iframe_code + '\n</body>')
        
    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)
    print(f"Added video to {filepath}")

def main():
    skip_files = ['index.php', 'header.php', 'footer.php', 'header-include.php', 'treatments.php', 'conditions.php']
    php_files = glob.glob('*.php')
    
    vid_idx = 0
    for file in php_files:
        if file in skip_files or file.startswith('header') or file.startswith('footer'):
            continue
            
        video_id = VIDEO_IDS[vid_idx % len(VIDEO_IDS)]
        video_url = f"https://www.youtube.com/embed/{video_id}"
        add_video_to_page(file, video_url)
        vid_idx += 1

if __name__ == "__main__":
    main()
