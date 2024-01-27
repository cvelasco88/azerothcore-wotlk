# Use a base image
FROM debian:bullseye-slim

# Update package list and install required libraries
RUN apt-get update && apt-get install -y \
    git \
    clang \
    cmake \
    make \
    gcc \
    g++ \
    libmariadb-dev-compat \ 
    libmariadbd-dev \
    libssl-dev \
    libbz2-dev \
    libreadline-dev \
    libncurses-dev \
    libboost-all-dev \
    mariadb-server \
    p7zip

# Set up alternatives for clang
RUN update-alternatives --install /usr/bin/cc cc /usr/bin/clang 100 \
    && update-alternatives --install /usr/bin/c++ c++ /usr/bin/clang 100

# Clone TrinityCore repository
RUN git clone -b 3.3.5 https://github.com/TrinityCore/TrinityCore.git /TrinityCore

# Set the working directory
WORKDIR /TrinityCore

# Compile the source code
RUN mkdir build
WORKDIR /TrinityCore/build
RUN cmake ../ -DMYSQL_LIBRARY=/usr/lib/x86_64-linux-gnu/libmariadbclient.so -DMYSQL_INCLUDE_DIR=/usr/include/mariadb

# Building the core
RUN make
RUN make -j$(nproc) install

# Extract Cameras, DBC and Maps files
WORKDIR /wowclient
RUN /usr/local/bin/mapextractor
RUN mkdir /wowdata/3.3.5a
RUN cp -r Cameras/ /wowdata/3.3.5a/Cameras
RUN cp -r dbc/ /wowdata/3.3.5a/dbc    
RUN cp -r maps/ /wowdata/3.3.5a/maps

# Extract Visual Maps (aka vmaps)
RUN /usr/local/bin/vmap4extractor
RUN mkdir /wowdata/3.3.5a/vmaps
RUN /usr/local/bin/vmap4assembler Buildings vmaps
RUN cp -r vmaps/ /wowdata/3.3.5a/vmaps

# Extract Movement Maps (aka mmaps - optional RECOMMENDED)
RUN /usr/local/bin/mmaps_generator
RUN mkdir /wowdata/3.3.5a/mmaps
RUN /usr/local/bin/vmap4assembler Buildings mmaps
RUN cp -r mmaps/ /wowdata/3.3.5a/mmaps

# Extract Movement Maps (aka mmaps - optional RECOMMENDED)
RUN cd /TrinityCore/src/server/worldserver/
RUN cp worldserver.conf.dist /usr/local/etc/worldserver.conf

# 3.3.5 only
RUN cd /TrinityCore/src/server/authserver/
RUN cp authserver.conf.dist /usr/local/etc/authserver.conf

# master only
# RUN cd TrinityCore/src/server/bnetserver/
# RUN cp bnetserver.conf.dist bnetserver.conf

# @see https://trinitycore.info/en/install/Database-Installation
# Update database data with SQL
# https://github.com/TrinityCore/TrinityCore/blob/3.3.5/sql/create/create_mysql.sql

# docker cp wowserver_container:/usr/local/etc/worldserver.conf ./docker/wowserver/config/worldserver.conf
# docker cp wowserver_container:/usr/local/etc/authserver.conf ./docker/wowserver/config/authserver.conf

# World initialization
RUN cd /wowdata/3.3.5a/
RUN /usr/local/bin/worldserver

# Run a command to keep the container running
CMD tail -f /dev/null

# Start the server
# CMD /usr/local/bin/authserver

# Get IP
# docker inspect wowserver_container | grep "IPAddress"

WORKDIR /usr/local/bin/
CMD ["/home/wow/server/bin/startup.sh"]
#CMD ["bash"]